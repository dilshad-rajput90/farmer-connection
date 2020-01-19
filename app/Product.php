<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','specification','price','stock','is_featured'];



    public function category()
    {

        return $this->belongsToMany('App\Category');

    }

        public function attachment()
    {

       return $this->hasMany('App\Attachment');

    }

     public function CartItem()
    {

       return $this->hasMany('App\CartItem');

    }



}


