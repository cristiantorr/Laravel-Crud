
@extends('layouts.app')
@section('title', 'Transporte')
@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      @if (session('message'))
           <div class="alert alert-success">
               {{ session('message') }}
           </div>
       @endif
      <h1>Registro de transporte</h1>
      {!! Form::open(['route' => 'transportInsert', 'method' => 'post', 'novalidate']) !!}
        <div class="row">
          <div class="input-field col s12">
            {!! Form::label('vehicle', 'Vehiculo') !!}
            {!! Form::text('vehicle', null, ['class' => 'form-control' , 'required' => 'required']) !!}
          </div>
              {{ $errors->first('vehicle') }}
        </div>
        <div class="row">
          <div class="input-field col s12">
          {{--!! Form::select('age', [
                                   'young' => 'Under 18',
                                   'adult' => '19 to 30',
                                   'adult2' => 'Over 30'
                                  ]
                           )
          !!--}}
          <select class="icons" name="choiceDay">
            <option value="" disabled selected>Escoja la opción</option>
            <option class="circle"  value="manana">Mañana</option><!-- con data-icon="images/sample-1.jpg" se puede poner imagenes ene l select-->
            <option value="circle" value="tarde">Tarde</option>
            <option value="circle" value="mananaytarde">Mañana/Tarde</option>
          </select>
          </div>
            {{ $errors->first('choiceDay') }}
        </div>

         <div class="row">
          <div class="input-field col s12">
            {!! Form::label('price', 'precio') !!}
            {!! Form::text('price', null, ['class'=>'form-control', 'required' => 'required']) !!}
          </div>
            {{ $errors->first('price') }}
        </div>

        <div class="form-group ">
          {!! Form::submit('Enviar', ['class' => 'btn btn-success' ] ) !!}
        </div>
      {!! Form::close() !!}
    </div>

  </div>
@endsection
