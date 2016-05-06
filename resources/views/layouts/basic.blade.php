<html>
<head>
    <title>App Name - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="http://localhost/project/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/project/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body >

<center>
    @section('sidebar')
        <style>
            .form-group
            {padding: 20px;
                border-radius: 20px;
                background-color:lightskyblue;
                max-width: 50%;
                max-height: 100%;
            }


            .ashish
            {padding: 20px;
                border-radius: 20px;
                background-color:lightskyblue;
                max-width: 50%;
                max-height: 100%;
                border-color: #0A0B0D;
            }
       body{

           background: #66a1ff;
       }



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