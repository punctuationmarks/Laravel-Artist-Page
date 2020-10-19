<?php



namespace App;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\LoginToken;
use Illuminate\Support\Facades\Auth;

class AuthenticatesUser
{

    use ValidatesRequests;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function invite()
    {

        $this->validateRequest()
            ->createToken()
            ->send();
    }

    public function login(LoginToken $token)
    {

        // dd($token->user);

        Auth::login($token->user);
        
        // delete the token, only one time use
        $token->delete();
    }

    protected function validateRequest()
    {
        // means the email already has to be registered
        $this->validate($this->request, [
            'email' => 'required|email|exists:users'
        ]);

        return $this;
    }

    
    protected function createToken()
    {
        $user = User::byEmail($this->request->email);
        
        // login model for generating and destroying tokens
        // this will link the records together
        $token = LoginToken::generateTokenFor($user); 
        // dd($token);
        // return $this;
        return $token;
    }

    // protected function send()
    // {
    //     Mail::send();
    // }


    
}
