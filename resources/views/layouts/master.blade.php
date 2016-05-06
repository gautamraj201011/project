<html>
<head>
    <title>App Name - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="http://localhost/project/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/project/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
<div class="container">
    <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/">Logout</a></li></ul>
    <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/verification/create">Verification</a></li></ul>
    </div>

</nav>

<center>
@section('sidebar')
    <h1 ><u>ONLINE VOTING SYSTEM</u></h1>
@show

<div class="container">
    @yield('content')
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
</div>
</center>
</body>
</html>