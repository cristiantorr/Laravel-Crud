<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transport;

class TransportController extends Controller
{
  /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */

     public function transportView(){

       return view('transport');
     }

    public function transportInsert(Request $request){
      return view('transport');
    }

     public function transportGetUser(){
      //$users = App\Transport::all();
      $users = App\Transport::all();
      dd($users);
      //return view('transport', ['users' => $users]);
    }
}
