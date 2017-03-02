<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;


class UserController extends Controller
{
    public function returnViewUser(){

    	return view('user');
    }

    public function allUser(){

	   $allUser = Users::all();
	   
	    return $allUser;

    }

    public function createUser(Request $request){
    	
      $createUser = Users::create($request->all());
      $createUser->save();
      return $createUser;
    }
}
