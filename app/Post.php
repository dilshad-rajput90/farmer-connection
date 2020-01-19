<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

   protected $fillable = ['author_id','post_type_id','title','summary','post_content'];



    public function Category()
    {
        return $this->belongsToMany('App\Category');
    }

    public function attachment()
    {

       return $this->hasMany('App\Attachment');

    }


}

