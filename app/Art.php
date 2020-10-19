<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    protected $fillable = ['title', 'body', 'image', 'image_name'];


    public function path()
    {
        return route('arts.show', $this);
    }

}
