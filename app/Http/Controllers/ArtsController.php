<?php

namespace App\Http\Controllers;

use App\Art;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtsController extends Controller
{

    // rendering a list of all table's objects
    public function index()
    {
        // returning the art pieces by time uploaded
        $arts = Art::latest()->get();
        return view(
            'arts.index',
            ['arts' => $arts]
        );
    }

    public function show(Art $art)
    {
        // view is arts.show since it's in a directory
        return view(
            'arts.show',
            ['art' => $art]
        );
    }


    // inserts a new observation into the selected table
    // done with a form
    public function create()
    {
        return view("arts.create");
    }    

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'min:3|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $art = new Art;
        $art->user_id = auth()->id();

        $art->title = $request->get('title');

        if ($request->has('body')) {
            $art->body = $request->get('body');
        }

        // image processing
        $request->file('image');
        $file = $request->file('image');
        $file_name = time() . strtolower(trim($file->getClientOriginalName()));
        $destinationPath = public_path('/images/');
        $file->move($destinationPath, $file_name);
        $art->image = $file;
        $art->image_name = $file_name;


        $art->save();


        return redirect('/arts');
    }

    // edits an existing object
    public function edit($id)
    {
        $art = Art::find($id);

        return view('arts.edit', compact('art'));
    }

    public function update(Art $art)
    {
        // inlining the returned validated attributes, but now updating not creating
        $art->update(request()->validate([
            'title' => 'min:3|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]));

        return redirect('/arts');
    }

    public function confirmDestroy($id)
    {

        $art = Art::find($id);

        return view('arts.destroy', compact('art'));
    }
    // deletes an observation
    public function destroy($id)
    { 
        $art = Art::find($id);
        
        $art->delete();

        return redirect('/arts');
    }



    // could even refactor this further since the validations are the same in the create 
    // and update methods, so you could make a method which just validates and 
    // pass that to the other functions 
    // protected function validateArt()
    // {

    //     return request()->validate([
    //         'title' => 'min:3|max:255',
    //         'body' => 'min:3|max:255',
    //         // 'image' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    //     ]);
    // }
}
