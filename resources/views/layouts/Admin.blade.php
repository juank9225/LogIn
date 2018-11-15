<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Huellas') }}</title>
    <style media="screen">
    .row{
  margin-left:0px;
  margin-right:0px;
}

#wrapper {
  padding-left: 60px;
  transition: all .4s ease 0s;
  height: 100%
}

#sidebar-wrapper {
  margin-left: -150px;
  left: 70px;
  width: 150px;
  background: #222;
  position: fixed;
  height: 100%;
  z-index: 10000;
  transition: all .4s ease 0s;
}

.sidebar-nav {
  display: block;
  float: left;
  width: 150px;
  list-style: none;
  margin: 0;
  padding: 0;
}
#page-content-wrapper {
  padding-left: 0;
  margin-left: 0;
  width: 100%;
  height: auto;
}
#wrapper.active {
  padding-left: 150px;
}
#wrapper.active #sidebar-wrapper {
  left: 150px;
}

#page-content-wrapper {
width: 100%;
}

#sidebar_menu , .sidebar-nav  {
  color: #999;
  display: block;
  float: left;
  text-decoration: none;
  width: 150px;
  background: #252525;
  border-top: 1px solid #373737;
  border-bottom: 1px solid #1A1A1A;
  -webkit-transition: background .5s;
  -moz-transition: background .5s;
  -o-transition: background .5s;
  -ms-transition: background .5s;
  transition: background .5s;
}
.sidebar_name {
  padding-top: 25px;
  color: #fff;
  opacity: .7;
}

.sidebar-nav li {
line-height: 40px;
text-indent: 20px;
}

.sidebar-nav li a {
color: #999999;
display: block;
text-decoration: none;
}

.sidebar-nav li a:hover {
color: #fff;
background: rgba(255,255,255,0.2);
text-decoration: none;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
height: 65px;
line-height: 60px;
font-size: 18px;
}

.sidebar-nav > .sidebar-brand a {
color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
color: #fff;
background: none;
}

#main_icon
{
  float:right;
 padding-right: 65px;
 padding-top:20px;
}
.sub_icon
{
  float:right;
 padding-right: 65px;
 padding-top:10px;
}
.content-header {
height: 65px;
line-height: 65px;
}

.content-header h1 {
margin: 0;
margin-left: 20px;
line-height: 65px;
display: inline-block;
}

@media (max-width:767px) {
#wrapper {
  padding-left: 70px;
  transition: all .4s ease 0s;
}
#sidebar-wrapper {
  left: 70px;
}
#wrapper.active {
  padding-left: 150px;
}
#wrapper.active #sidebar-wrapper {
  left: 200px;
  width: 200px;
  transition: all .4s ease 0s;
}
}
    </style>

    <!-- Styles-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
  <div id="wrapper" class="active">

    <!--
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{ url('/') }}">Huellas y Colas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end"  id="navbarNavAltMarkup">
        <div class="navbar-nav "  >
          <ul class="nav navbar-nav " >
            <li><a class="nav-item nav-link active " href="{{ route('LogIn.index') }}">Login</a></li>
            <li><a class="nav-item nav-link active " href="{{ route('Usuario.create') }}">Registro</a></li>
            <li><a class="nav-item nav-link active " href="{{ route('Usuario.index') }}">Usuarios</a></li>
          </ul>
        </div>
      </div>
    </nav>
  -->

  <div id="sidebar-wrapper">
    <ul id="sidebar_menu" class="sidebar-nav">
      <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
    </ul>
    <ul class="sidebar-nav" id="sidebar">
      <li>
        <li><a  href="{{ route('LogIn.index') }}">Login</a></li>
        <li><a  href="{{ route('home') }}">Home</a></li>
      </li>
      <ul class="sidebar-nav" id="sidebar">
        <li><a  href="{{ route('Usuario.index') }}">Usuarios</a></li>
        <li><a  href="{{ route('Usuario.create') }}">Registro</a></li>
      </ul>
      <li>
          <li><a  href="">Roles</a></li>
          <li><a  href="">Nuevo Rol</a></li>
        </li>
      <li>
      <li>
        <li><a  href="">Menús</a></li>
        <li><a  href="">Nuevo Menú</a></li>
      </li>
      <li >
        <li><a  href="{{ url('/logout') }}">Salir</a></li>
      </li>
    </ul>
  </div>

    @yield('content')

  </div>

    <!-- Scripts-->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("active");
    });
    </script>
</body>
</html>
