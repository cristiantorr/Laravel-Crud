<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransportRequest;
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

    public function transportInsert(TransportRequest $request){
      $transportInsert = new Transport();
      $transportInsert->vehicle = $request->vehicle;
      /*$transportInsert->create($request->all());*/
      $transportInsert->save();

        return redirect('transport')->with('message', 'Se registro el usuario '.$transportInsert->vehicle);

    }

     public function transportGetUser(){

    }
}
