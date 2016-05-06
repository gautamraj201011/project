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
        <style>
            .form-group
            {padding: 20px;
                border-radius: 20px;
                background-color:lightskyblue;
                width: 40%;
            }
            body{
                background: url('http://img01.deviantart.net/05e3/i/2012/254/5/d/_hd__wood_theme_wallpaper_by_hiddenabilities-d5eevov.jpg') ;
            }
            .ashish
            {padding: 20px;
                border-radius: 20px;
                background-color:lightskyblue;
                width: 30%;
                position:absolute;
                top:30%;
                left:35%;
                height:50%;
                border-color: #0A0B0D;
            }

            table {
                border: 2px solid skyblue;
                border-collapse: collapse;
            }
            td {width:400px;
                margin: 5px;
                padding-left:5%;
                padding: 10px;
                text-align: left;
            }
            .sex{border: 10px;
                width: 100%;
                height: 6em;}

        </style>
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