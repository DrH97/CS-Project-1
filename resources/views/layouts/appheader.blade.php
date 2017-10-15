<!DOCTYPE html>
<html>

<head>

    <title>TechCrowd</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    
    <!-- Font Awesome Icon Library - for rating widget -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- link to the main css -->
    <link type="text/css" rel="stylesheet" href="assets/css/main.css" />
    <link type="text/css" rel="stylesheet" href="{!! asset('css/main.css') !!}" />
    <!-- jquery plugin -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- custom font plugin -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

</head>

<body>

    <!-- TOP NAVIGATION BAR -->
    <header>

        <a href="#It'sTechCrowdYooo" id="title">TechCrowd</a>
        <div id="links">
            <a href="/" style="color: black;background-color: skyblue;">Shop</a>
            <a href="repairs">Repairs</a>
            <a href="mycart">MyCart</a>
        </div>
        <div class="account">
            <p>LOGIN OR SIGNUP</p>
            <img src="{!! asset('images/sample.jpg') !!}" />
        </div>

    </header>

    <!-- DESCRIPTION -->
    <div class="description">
        <center>
            <div>
                @section('bluebar')
                @show
                
            </div>
        </center>
    </div>

    @yield('content')
</body>
</html>