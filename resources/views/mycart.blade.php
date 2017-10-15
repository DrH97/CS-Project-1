<!DOCTYPE html>
<html>

<head>

    <title>TechCrowd</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

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

        <a href="#" id="title">TechCrowd</a>
        <div id="links">
            <a href="index.html">Shop</a>
            <a href="repairs.html">Repairs</a>
            <a href="mycart.html" style="color: black;background-color: skyblue;">MyCart</a>
        </div>
        <div class="account">
            <p>LOGIN OR SIGNUP</p>
            <img src="assets/images/default-profile.png" />
        </div>

    </header>

    <!-- DESCRIPTION -->
    <div class="description">
        <center>
            <div>
                <h3>You have no items on your cart</h3>
                <a href="index.html"><button>GET STARTED</button></a>
            </div>
        </center>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <form method="post" action="">
            <table>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Seller</th>
                    <th>Time Purchased</th>
                    <th>Remove?</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>sth here</td>
                    <td>sth else</td>
                    <td>sth sth</td>
                    <td>more sth</td>
                    <td>another sth</td>
                    <td><input type="checkbox" value="###"></td>
                </tr>


            </table>
            
            <input type="submit" value="PURCHASE ITEM(S)">
            
        </form>

    </div>


</body>

</html>
