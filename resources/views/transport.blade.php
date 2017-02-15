
@extends('layouts.app')
@section('title', 'Transporte')
@section('content')
  <div class="row">
     <div class="col-md-10 col-md-offset-1">
       <div class="row">
         <div class="col-md-10 col-md-offset-1">
           <h2>hola</h2>

              {!! Form::open(['route' => 'transportGetUser', 'method' => 'post', 'novalidate']) !!}
                        <div class="form-group">
                              {!! Form::label('full_name', 'vehicle') !!}
                              {!! Form::text('vehicle', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                          </div>
                         
                        <div class="form-group">
                              {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                          </div>
                    {!! Form::close() !!}
         </div> 
      </div>
      @foreach ($users as $user)
       {{ dd($users) }}
      @endforeach
     </div>
   </div>
@endsection
