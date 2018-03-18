<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deleteUsersController extends Controller
{
    public function deleteUser($id){
        return "User to delete: ".id;
    }
}
