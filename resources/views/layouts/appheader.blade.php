<!DOCTYPE html>
<html>

<head>

    <title>TechCrowd</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    
    <!-- Font Awesome Icon Library - for rating widget -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- link to the main css -->
    <link type="text/css" rel="stylesheet" href="{!! asset('css/main.css') !!}" />
    <!-- jquery plugin -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- custom font plugin -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

</head>

<body>

    @yield('content')

    <!-- FOOTER -->
    <div class="footer">
        <center>
            <p>&copy TechTriad 2017</p>
            <!-- <p>&copy ReTrioTec 2017</p> -->
        </center>
    </div>

</body>
</html>