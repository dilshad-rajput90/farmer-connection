<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function Post()
    {
        return $this->belongsToMany('App\Post');
    }

    public function product()
    {
        return $this->belongsToMany('App\Product');
    }

}
