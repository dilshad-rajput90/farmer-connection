<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = ['post_id','mime_type_id','path','product_id'];


    public function post()
    {

        return $this->belongsTo('App\Post');
    }

    public function mime_type()
    {

        return $this->belongsToMany('App\MimeType');

    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }


}
