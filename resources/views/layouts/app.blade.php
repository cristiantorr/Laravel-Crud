<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
     <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
     <!--AngularJS-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
  <script type="text/javascript" src="{!! asset('js/angularMain.js') !!}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.js"></script>

  </head>
  <body>
    <header>
      <nav class="teal accent-4">
        <div class="nav-wrapper">
          <a href={{ route('transport') }} class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href={{ route('transport') }}>Aplicación</a></li>
            <li><a href={{ route('userview') }}>Angular</a></li>
            <li><a href="collapsible.html">Administrable</a></li>
          </ul>
        </div>
       </nav>
    </header>

    <!-- Page Layout here -->
    <div class="row">

      <div class="col s12 m4 l2"> 
        <ul id="slide-out" class="side-nav">
          <li>
            <div class="userView">
              <div class="background">
                <img src="images/office.jpg">
              </div>
              <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
              <a href="#!name"><span class="white-text name">Cristian Torres</span></a>
              <a href="#!email"><span class="white-text email">ps4cristiantorr@gmail.com</span></a>
            </div>
          </li>
          <li>
            <a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>

      <div class="col s12 m6 l8"> 
        @yield('content');
      </div>
      <div class="col s12 m2 l2 sidebar">
          <p>sidebar</p>
      </div>
    </div>
    <footer class="page-footer blue-grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Contenido</h5>
          <p class="grey-text text-lighten-4">Usanddo columnas y row materialize</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2017 Copyright Text
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>

  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>

  </body>
</html>
