<html>
<head>
    <title>App Name - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="http://localhost/project/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/project/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body >
<nav class="navbar navbar-default navbar-static-top ">
    <div class="container">
        <ul class="nav navbar-nav"> <li><img src="http://cliparts.co/cliparts/yck/o57/ycko57xcE.png" style="width:80px;height:80px;" align="left" ></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/elections/create">Create Election</a></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/candidate/create">Candidate Registration</a></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/voter/create">Voter Registration</a></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/parties/create">Party Registration</a></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/result/create">View Result</a></li></ul>
        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/voterlist/create">Generate VoterList</a></li></ul>

        <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public/create_constituency/create">Create Constituency</a></li></ul>
        <ul class="nav navbar-nav navbar-right"> <li><a href="http://localhost/project/public">Log Out</a></li></ul>
    </div>

</nav>

<center>
    @section('sidebar')
        <style>
            .form-group
            {padding: 20px;
                border-radius: 20px;
                background-color: #ffa876;
                max-width: 50%;
                max-height: 100%;
            }

            .ashish
            {padding: 20px;
                border-radius: 20px;
                background-color:#ffa876;
                max-width: 50%;
                max-height: 100%;
                border-color: #0A0B0D;
            }
            table {
                border: 2px solid skyblue;
                border-collapse: collapse;
            }




            td,th{ border: 2px solid black;
                width:20%;
                margin: 5px;
                padding-left:5%;
                padding: 10px;
                text-align: left;
            }

            body{

                background-image: url("http://localhost/project/images/back.jpg");
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