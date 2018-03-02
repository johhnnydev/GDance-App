<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // sets primary key
    protected $primaryKey = 'id';

    // set 1 to 1 relationship to student.
    // https://laravel.com/docs/5.4/eloquent-relationships#one-to-one
    // Eloquent determines the foreign key of the relationship based on the model name. 
    // In this case, the  Phone model is automatically assumed to have a user_id foreign key. 
    // If you wish to override this convention, you may pass a second argument to the hasOne method.
    // return $this->hasOne('App\Phone', 'foreign_key');
    public function student(){
        return $this->hasOne('App\Students');
    }
    public function father(){
        return $this->hasOne('App\Father');
    }
    public function mother(){
        return $this->hasOne('App\Mother');
    }
    public function guardian(){
        return $this->hasOne('App\Guardian');
    }
    public function schoolRecord(){
        return $this->hasOne('App\SchoolRecord');
    }
    public function aboutstudent(){
        return $this->hasOne('App\About');
    }
    
    public function org(){
        return $this->hasMany('App\Orgs');
    }
    public function violation(){
        return $this->hasMany('App\Violation');
    }
    public function sibling(){
        return $this->hasMany('App\Sibling');
    }
    public function appointment(){
        return $this->hasMany('App\Appointments');
    }

}
