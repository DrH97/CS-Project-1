@extends('layouts.app')
@extends('layouts.appheader')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}


<style>
        
        html, body{
            background-color: skyblue;
        }
        
        .content h2 {
            margin-top: 2em;
            text-align: center;
        }
        
        div.tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: transparent;
            padding: 0 32.6% 0 32.6%;
            margin-top: 2em;
            border-style: none;
        }
        
        .tabcontent {
            border-style: none;
        }
        /* Style the buttons inside the tab */
        
        div.tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            color: white;
            margin: 0 1em;
            border: 1px solid white;
        }
        /* Change background color of buttons on hover */
        
        div.tab button:hover {
            color: dodgerblue;
            background-color: white;
            border: 1px solid dodgerblue;
        }
        /* Create an active/current tablink class */
        
        div.tab button.active {
            color: white;
            background-color: dodgerblue;
            border-style: none;
        }

        form a{
            color: dodgerblue;
            font-size: 13px;
            text-decoration: none;
            position: relative;
            top: 10;
        }
    </style>

{{-- @section('content') --}}
    <!-- TOP NAVIGATION BAR -->
    <header>

        <center>
            <a href="/" id="title">TechCrowd<span id="subtitle"> WELCOME</span></a>
        </center>

    </header>

    <!-- CONTENT -->
    <div class="content">

        <h2>Hey there, welcome to <span style="font-size: 1.2em;"><b>TechCrowd</b></span> :)</h2>

        <!-- TABS -->
        <div class="tab">
            <button class="tablinks" onclick="openTabs(event, 'login')" id="defaultOpen">LOGIN</button>
            <button class="tablinks" onclick="openTabs(event, 'signup')"><b>CREATE NEW ACCOUNT</b></button>
        </div>

        <!-- LOGIN -->
        <div id="login" class="tabcontent">

            <center>
                {{ $errors->first('email-log') }}
                {{ $errors->first('password-log') }}
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus><br>

                <input id="password" type="password" placeholder="Password" name="password" required><br><br>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                
                <input type="submit" value="LOG IN"><br>

                <a href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>

            </form>
            </center>

        </div>


        <!-- SIGNUP -->
        <div id="signup" class="tabcontent">

            <center>
                {{ $errors->first('email-sign') }}
                {{ $errors->first('password-sign') }}
                {{-- {{ $errors->first('lname') }}
                {{ $errors->first('number') }} --}}
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div display="inline-flex">
                    <input id="fname" type="text" placeholder="First Name" name="fname" required autofocus>

                    <input type="text" placeholder="Last Name" name="lname" required autofocus>
                </div><br>

                <div display="inline-flex">
                    <label style="margin-right: 2em;">Gender:  </label>

                    <input id="male" type="radio" name="gender" value="male" required><label for="male" style="margin-right: 2em;">Male</label>

                    <input id="female" type="radio" name="gender" value="female" required><label for="female">Female</label>
                </div><br>

                <input id="number" type="number" placeholder="Mobile Number" name="number" required><br>

                <input id="email" type="email" placeholder="Email" name="email-sign" required><br>

                <input id="password" type="password" placeholder="Password" name="password-sign" required><br>

                <input id="password-confirm" type="password" placeholder="Re-type Password" name="password-confirm-sign" required><br><br>
                <input type="submit" value="SIGN UP"><br>

            </form>
            </center>
        
        </div>


    </div>


    <script>
        function openTabs(evt, tabName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

@endsection