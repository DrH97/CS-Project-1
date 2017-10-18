<!-- TOP NAVIGATION BAR -->
    <header>

        <a href="#It'sTechCrowdYooo" id="title">TechCrowd</a>
        <div id="links">
            <a class="tablinks" href="/" onclick="openTabs(event, 'dashboard')"  id="defaultOpen">Shop</a>
            <a class="tablinks" href="repairs" onclick="openTabs(event, 'dashboard')">Repairs</a>
            <a class="tablinks" href="mycart" onclick="openTabs(event, 'dashboard')">MyCart</a>
        </div>
        <div class="account">
            <a href="/login" style="text-decoration: none;"><p>LOGIN</p></a>
            <img src="{!! asset('sample.jpg') !!}" />
            
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

<script>
        function openTabs(evt, tabName) {
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