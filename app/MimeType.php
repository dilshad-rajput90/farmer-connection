<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MimeType extends Model
{

    public function attachment()
    {

        return $this->hasOne('App\Attachment');

    }
}
