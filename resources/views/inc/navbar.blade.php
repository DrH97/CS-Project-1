<!-- TOP NAVIGATION BAR -->
    <header>

        <a href="#It'sTechCrowdYooo" id="title">TechCrowd</a>
        <div id="links">
            <a class="tablinks" href="/" onclick="openTabsnav(event, 'shop')"  id="defaultOpen">Shop</a>
            <a class="tablinks" href="repairs" onclick="openTabsnav(event, 'repairs')">Repairs</a>
            <a class="tablinks" href="mycart" onclick="openTabsnav(event, 'mycart')">MyCart</a>
        </div>
        <div class="account">
            <!-- Authentication Links -->
            @guest
                <a href="{{ route('login') }}" style="text-decoration: none;"><p>LOGIN</p></a>
            @else
                Welcome: <a href="{{ route('profile') }}" style="text-decoration: none;"><p>{{ Auth::user()->name }}</p></a>
            @endguest
            <img src="{!! asset('images/defaultprofile.png') !!}" />
            
        </div>

    </header>

    <!-- DESCRIPTION -->
    {{-- <div class="description">
        <center>
            <div>
                @yield('bluebar')
                @show
                
            </div>
        </center>
    </div> --}}

<script>
        function openTabsnav(evt, tabName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.background-color = "";
                tabcontent[i].style.color = "";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tabName).style.display = "block";
            document.getElementById(tabName).style.color = "black";
            document.getElementById(tabName).style.background-color = "skyblue";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>