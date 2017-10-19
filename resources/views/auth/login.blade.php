@extends('layouts.appheader')

<style>
        
        .body{
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
            color: black;
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

@section('content')
    <!-- TOP NAVIGATION BAR -->
    <header>

        <center>
            <a href="/" id="title">TechCrowd<span id="subtitle"> WELCOME</span></a>
        </center>

    </header>

<div class="body">
    <!-- CONTENT -->
    <div class="content">

        <h2>Hey there, welcome to <span style="font-size: 1.2em;"><b>TechCrowd</b></span> :)</h2>

        <!-- TABS -->
        <div class="tab">
            <button class="tablinks" onclick="openTabs(event, 'login')" id="defaultOpen">LOGIN</button>
            <button class="tablinks" onclick="openTabs(event, 'signup')">CREATE NEW ACCOUNT</button>
        </div>

        <!-- LOGIN -->
        <div id="login" class="tabcontent">

            <center>
                {{ $errors->first('email') }}
                {{ $errors->first('password') }}
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <br><span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    <br>
                @endif
                <br>

                <input id="password" type="password" placeholder="Password" name="password" required><br><br>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif


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
            <form method="post" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div display="inline-flex">
                    <input id="firstname" type="text" placeholder="First Name" name="firstname" required autofocus>
                    @if ($errors->has('firstname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif

                    <input id="lastname" type="text" placeholder="Last Name" name="lastname" required autofocus>
                    @if ($errors->has('lastname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                </div><br>
                

                <div display="inline-flex">
                    <label style="margin-right: 2em;">Gender:  </label>

                    <input id="male" type="radio" name="gender" value="male" required><label for="male" style="margin-right: 2em;">Male</label>
                    
                    <input id="female" type="radio" name="gender" value="female" required><label for="female">Female</label>
                    @if ($errors->has('gender'))
                        <span class="help-block">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                    @endif
                </div><br>

                <input id="mobile" type="number" placeholder="Mobile Number" name="mobile" required><br>
                @if ($errors->has('number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('number') }}</strong>
                    </span>
                @endif

                <input id="email-sign" type="email" placeholder="Email" name="email-sign" required><br>
                @if ($errors->has('email-sign'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email-sign') }}</strong>
                    </span>
                @endif

                <input id="password-sign" type="password" placeholder="Password" name="password-sign" required><br>
                @if ($errors->has('password-sign'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password-sign') }}</strong>
                    </span>
                @endif

                <input id="password-confirm" type="password" placeholder="Re-type Password" name="password_confirmation" required><br><br>
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

</div>

@endsection