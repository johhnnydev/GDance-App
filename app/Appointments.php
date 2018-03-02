<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
