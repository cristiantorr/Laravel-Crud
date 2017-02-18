
@extends('layouts.app')
@section('title', 'Buscar Transporte')
@section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Buscar Registros de transporte</h1>
      {!! Form::open(['route' => 'transportSearch', 'method' => 'post', 'novalidate']) !!}
        <div class="row">
          <div class="input-field col s6">
            {!! Form::label('search', 'Fecha Comienzo') !!}
            {!! Form::text('createdStart', null, ['class' => 'form-control' , 'required' => 'required']) !!}
          </div>
          <div class="input-field col s6">
            {!! Form::label('search', 'Fecha Final') !!}
            {!! Form::text('createdEnd', null, ['class' => 'form-control' , 'required' => 'required']) !!}
          </div>
              {{--$errors->first('vehicle')--}}
        </div>
        <div class="form-group ">
          {!! Form::submit('Enviar', ['class' => 'btn btn-success' ] ) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      @if (isset($transportSearchs))
        <div class="alert alert-success">
          <table>
            <thead>
              <tr>
                  <th data-field="id">ID</th>
                  <th data-field="id">Vehiculo</th>
                  <th data-field="name">Día</th>
                  <th data-field="price">Precio</th>
              </tr>
            </thead>

            <tbody>
              @foreach($transportSearchs as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->vehicle}}</td>
                  <td>Falta</td>
                  <td>{{$row->price}}</td>
                  <td>{{$row->created_at}}</td>
                  <td><a href="{{ route('transportUpdateForm',$row->id) }}" >Actualizar</a></td>
                  <td><a href="{{ route('transportDelete', $row->id) }}">Eliminar</a></td>
                </tr>
                   
                  <!--<div class="row">
                    <div class="input-field col s12">
                      <select class="icons" name="choiceDay">
                        <option value="" disabled selected>{{-- $row->choiceDay --}}</option>
                        <option class="circle"  value="manana">Mañana</option>
                        <option value="circle" value="tarde">Tarde</option>
                        <option value="circle" value="mananaytarde">Mañana/Tarde</option>
                      </select>
                    </div>
                      {{-- $errors->first('choiceDay') --}}
                  </div>-->

                     
              @endforeach
            </tbody>
          </table>
        </div>
      @endif
    </div>
  </div>
    @if (isset($transportUpdateForm))

        <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1>Actualizar Registros de transporte</h1>
           {!! Form::open(['route' => 'transportUpdate', 'method' => 'post', 'novalidate']) !!}
            <div class="row">
              <div class="input-field col s12">
                {!! Form::label('vehicle', 'Vehiculo') !!}
                {!! Form::text('vehicle', $transportUpdateForm['vehicle'], ['class' => 'form-control' , 'required' => 'required']) !!}
              </div>
                  {{-- $errors->first('vehicle') --}}
            </div>
             <!-- <div class="row">
                <div class="input-field col s12">
               
                  <select class="icons" name="choiceDay">
                    <option value="" disabled selected>Escoja la opción</option>
                    <option class="circle"  value="manana">Mañana</option>
                    <option value="circle" value="tarde">Tarde</option>
                    <option value="circle" value="mananaytarde">Mañana/Tarde</option>
                  </select>
                </div>
                  {{-- $errors->first('choiceDay') --}}
              </div>-->

             <div class="row">
              <div class="input-field col s12">
                {!! Form::label('price', 'precio') !!}
                {!! Form::text('price', $transportUpdateForm['price'], ['class'=>'form-control', 'required' => 'required']) !!}
              </div>
                {{-- $errors->first('price') --}}
            </div>

            <div class="form-group ">
              {!! Form::text('ID', $transportUpdateForm['id'],['class' => 'hidden']) !!}
              {!! Form::submit('Enviar', ['class' => 'btn btn-success' ] ) !!}  
            </div>
          {!! Form::close() !!}
           </div>
  </div>
      
    @endif
@endsection