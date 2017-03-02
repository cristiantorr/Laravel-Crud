
<!DOCTYPE html >
<html lang="en" ng-app="userModuleApp">
<head>
  <meta charset="UTF-8">
  <title>angular</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"></script>
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.js"></script>
  <script type="text/javascript" src="{!! asset('js/angularMain.js') !!}"></script>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script></head>
<body>
  <header>
   <nav class=" blue darken-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <!--<li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>-->
        <li><input type="text" placeholder="correo"></li>
        <li><input type="password" placeholder="password"></li>
      </ul>
    </div>
  </nav>
        
  </header>
 
  <!--<div id="ng-controller" ng-controller="userControllerApp">
    <h3 class="">esto e sangularuser<small ng-if="remaining()"></small></h3>
    <ul class="">
      <li ng-repeat="user in users">
        <input type="checkbox" ng-model="user.id">
           @{{ user.vehicle }}
      </li>
    </ul>
    <div>
      <h3>formulario prueba angular</h3>
        <form ng-submit="addUser()" >
          Nombre de vehiculo
          <input type="text" ng-model="vehicle" name="vehicle" />
          <input type="submit" id="submit" value="Crear Usuario" />
          
        </form>
      </div>
 </div>-->
 <div class="container" id="ng-controller" ng-controller="userControllerApp">
    <div class="acordion">
      <ul class="collapsible" data-collapsible="accordion">
        <li ng-repeat="user in users">
          <div class="collapsible-header"><i class="material-icons">filter_drama</i>@{{ user.name }}</div>
          <div class="collapsible-body"><span>email: @{{ user.email }}</span></div>
        </li>
      </ul>
    </div>
    <div>
      <h3>formulario prueba angular</h3>
        <form ng-submit="addUser()" >
          Nombre de vehiculo
          <input type="text" ng-model="name" name="name" />
          <input type="submit" id="submit" value="Crear Usuario" />   
        </form>
      </div>
 </div>
 </div>

 
</body>
</html>
 <!--<div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Registro de usuarios <small>Angular</small></h1>
      {{--!! Form::open() !!}
        <div class="row">
          <div class="input-field col s12">
            {!! Form::label('userName', 'Nombre') !!}
            {!! Form::text('userName', null, ['class' => 'form-control' , 'required' => 'required']) !!}
          </div>
              {{ $errors->first('userName') }}
        </div>
        

        <div class="form-group ">
          {!! Form::submit('Enviar', ['class' => 'btn btn-success' ] ) !!}
        </div>
      {!! Form::close() !!--}}
    </div>

  </div>-->
