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
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/elections/create">Election</a></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/candidate/create">Candidate Registration</a></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/voter/create">Voter Registration</a></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/parties/create">Party Registration</a></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/result/create">Result</a></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/voterlist/create">Generate VoterList</a></li></ul>

        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/create_constituency/create">Constituency</a></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public">Log Out</a></li></ul>
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