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
     public function transportViewSearch(){
        return view('transportsearch');
     }

    //TransportRequest -> valida los campos(reglas ) que viene desde el form
    public function transportInsert(TransportRequest $request){

    
      $transportInsert = Transport::create($request->all());
      $transportInsert->save();

       return redirect('transport')->with('message', 'Se registro el usuario '.$transportInsert->vehicle);

    }

    // Función para buscar los datos de fecha a fecha
    public function transportSearch(Request $request){

    
        $transportSearchs = Transport::whereBetween('created_at',[$request->createdStart, $request->createdEnd])->get();

       // Compact -> retorna una matriz con sus variables y valores 

       return view('transportsearch',compact('transportSearchs'));

        // O se puede retornar asi tambien 
       //return view('transportsearch',['transportSearchs' => $$transportSearchs ]);

    }

    //aqui no se utiliza formulario, se manda directamente al rout el id en un 'a href', para hacerlo con form en los botones enviar y editar se ponene en la tabla como formularios y en el action los manda al route, son dos formas de hacerlo.

    public function transportDelete($id){

      $transportDelete = Transport::find($id)->delete();
      return view('transportsearch');
    }

    //Función que busca el id en la base de datos de la fila que quiero traer los datos
    public function transportUpdateForm($id){

      $transportUpdateForm = Transport::find($id);
      return view('transportsearch', compact('transportUpdateForm'));

    }

    // Función para actualizar (formulario actualizar)
    public function transportUpdate(Request $request){

      $transportUpdate = Transport::find($request->ID);
      $transportUpdate->vehicle   = $request->vehicle;
      $transportUpdate->choiceDay = $request->choiceDay; 
      $transportUpdate->price     = $request->price;
      $transportUpdate->save();
      return view('transportsearch');

    }

}
