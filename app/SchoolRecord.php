<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolRecord extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
