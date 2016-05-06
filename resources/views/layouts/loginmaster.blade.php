<html>
<head>
    <title>App Name - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="http://localhost/project/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/project/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body >
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

                background-image: image("background.jpg");


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