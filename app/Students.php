<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
	// Capitalize First Name after retrieving.
    public function getFirstNameAttribute($value){
    	return ucwords($value);
    }

    // Capitalize Middle Name after retrieving.
    public function getMiddleNameAttribute($value){
    	return ucwords($value);
    }

    // Capitalize Last Name after retrieving.
    public function getLastNameAttribute($value){
    	return ucwords($value);
    }

    // set the relationship to user model.
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
