<body>
    <style>
    /* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500&family=Indie+Flower&family=Outfit:wght@300;500&family=Poppins:wght@200;400&family=Potta+One&family=Ysabeau+Office:ital,wght@0,400;1,300&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Comfortaa';
    }

    .top-bar{
    display: flex;
        height: 150px;
        border-bottom: 1px solid #e2e2e2;
    background-color: #ffff;
    background-image: url('https://theimaara.co.ke/assets/img/petals4.svg');
        background-size: cover;
        background-position: bottom;
        background-repeat: no-repeat;
    }

    .socials-container{
        display: block;
        width: 20%;
        background-image: url('https://theimaara.co.ke/assets/img/petal.svg');
        background-size: cover;
        background-position: bottom;
        background-repeat: no-repeat;
    
    }

    #clock {
    position: absolute;

        font-size: 1.5rem;
        color: #333;
    margin: auto;
    margin-top: 1rem;
    margin-left: 3rem;
    }
    /*Open-Closed status*/
    .socials-container .status {
        margin: 50px;
    }

    .socials-container .status h1 {
        font-size: 24px;
    }

    .socials-container .status p {
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }
    .logo-container{
    display: flex;
        width: 100%;
        justify-content: center;
    }

    .logo-container .logo{
    margin-top: 5px;
        margin-bottom: 5px;
    }

    .logo-container .logo img{
    height: 150px;
        width: 150px;
    }

    /*Search -container*/
    .search-container {
        margin: auto;
        width: 20%;
    }

    #search-input {
        padding: 10px;
        width: 200px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #search-button {
        padding: 10px 20px;
        background-color: #000000;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Style the navbar */
    .navbar-white {
    background-color: #ffffff;
        color: #000000;
        display: flex;
        justify-content: center;
        padding: 5px 10px;
        height: 50px;
    }

    .navbar-white .links {
        list-style: none;
        display: inline-flex;
        gap: 4rem;
    }

    .navbar-white .links a{
        color: #000;
        text-decoration: none;
    }

    .navbar-white .links a:hover{
        transition: all ease-in-out .4s;
        color: #f540a4;
    }

    /* Style the dropdown container */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Style the dropdown content (hidden by default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 99;
    }

    /* Style the dropdown links */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change the color of links on hover */
    .dropdown-content a:hover {
        background-color: #000000;
        color: white;
    }

    /* Show the dropdown content when the button is hovered over */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    .nav-container{
        background-color: #000;
        width: auto;
        height: 40px;
        display: flex;
        justify-content: center;
    }

    .nav-container .links{
        list-style: none;
        display: inline-flex;
        margin: auto;
        gap: 4rem;
    }

    .nav-container .links a{
        text-decoration: none;
        color: #ffffff;
    }

    .nav-container .links a:hover{
        color: #f540a4;
        transition: all ease 0.5s;
    }
    /* Style the navbar */
    .navbar-mobile {
        background-color: #fff;
        color: #fff;
        display: none;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        margin-bottom: 1rem;
    }

    /* Style the menu items */
    .menu {
        list-style-type: none;
        display: flex;
    }

    .menu li {
        margin-right: 20px;
    }

    .menu li:last-child {
        margin-right: 0;
    }

    .menu a {
        color: #fff;
        text-decoration: none;
    }

    .menu a:hover{
        color: #f540a4;
        transition: all ease .4s;
    }

    .sub-menu{
        list-style: none;
        display: flex;
    }

    .sub-menu li{
        margin-right: 20px;
    }

    .sub-menu a{
        color: #fff;
        text-decoration: none;
    }

    .sub-menu a:hover{
        color: #f540a4;
        transition: all ease .4s;
    }
    /* Style the menu toggle button */
    .menu-toggle {
        display: none;
        flex-direction: column;
        cursor: pointer;
    }

    .bar {
        width: 25px;
        height: 3px;
        background-color: #050505;
        margin: 3px 0;
        transition: 0.4s;
    }

    .bar:nth-child(2){
        width: 20px;
    }

    /* Media query for mobile view */
    @media screen and (max-width: 768px) {
        .top-bar{
            display: none;
        }
        .socials-container{
            display: none;
        }

        .logo-container .logo img{
            height: 80px;
            width: 80px;
        }

        .search-container{
            display: none;
        }

        .navbar-white .links{
            display: none;
        }

        .nav-container{
            display: none;
        }

        .navbar-mobile{
            display: flex;
            position: fixed;
            width: 100%;
            z-index: 999;
            
        }

        .navbar-mobile .mobile-logo img{
            height: 60px;
            width: auto;
        }

        .menu {
            display: none;
            flex-direction: column;
            align-items: flex-start;
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            background-color: #333;
            z-index: 1;
        }

        .menu.active {
            display: flex;
            
            transition: all ease .4s;
        }

        .menu li {
            margin: 10px 20px;
        }

        .menu-toggle {
            display: flex;
            margin-left: auto;
        }

        .menu-toggle.active .bar:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
            background-color: #f540a4;
        }

        .menu-toggle.active .bar:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active .bar:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }

        .menu .sub-menu{
            display: flex;
            flex-wrap: wrap;
            width: 80%;
            border-top: 2px solid #f540a4;
        }

        .carousel-item{
            height: 40vh;
        }
    }
    </style>

    <!--Header-->
    <nav class="navbar-mobile">
            <div class="mobile-logo">
                <a href = "https://theimaara.co.ke/sp/"><img src="https://theimaara.co.ke/assets/Logos/imaaralogo.png" alt="logo" /></a>
            </div>
            <div class="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="menu">
                <li><a href="/sp/stores">Stores</a></li>
                <li><a href="https://theimaara.co.ke/entertainment">Entertainment</a></li>
                <li><a href="/sp/dine">Dine</a></li>
                <li><a href="https://theimaara.co.ke/services">Services</a></li>
                
                <ul class="sub-menu">
                    <li><a href="">Offers</a></li>
                    <li><a href="">Events</a></li>
                    <li><a href="https://theimaara.co.ke/gallery">Gallery</a></li>
                    <li><a href="https://theimaara.co.ke/map/">Map</a></li>
                    <li><a href="https://theimaara.co.ke/parking">Parking</a></li>
                </ul>
                
            </ul>
            <ul class="sub-menu">
                
            </ul>
        </nav>
        <!--Top Navbar-->
        <div class="top-bar">
            <div class="socials-container">
    <div id="clock"></div>
                <div class="status">
            <p id="status-text"></p>
        </div>
            
            </div>

            <div class = "logo-container">
                <!--Logo-->
                <div class = "logo">
                    <a href = "https://theimaara.co.ke/sp/"><img src="https://theimaara.co.ke/assets/Logos/imaaralogo.png" alt="logo" /></a>
                </div>
                <!--Logo-end-->
            </div>

            <!--Search-->
            <div class="search-container">
                
                
            </div>

        </div>
        
        <!--White Navbar-->
        <nav class="navbar-white">
            <ul class="links">
                <!--Shopping-->
                <li class="dropdown">
                    <a href = "/sp/stores">Stores</a>
                    <div class="dropdown-content">
                    <!--
    <a href="#">Naivas</a>
                        <a href="#">Littlemore</a>
                        <a href="#">Hotpoint</a>
                        <a href="#">Silentnight</a>
                        <a href="#">Bata</a>
                        <a href="#">Umoja</a>
    -->
                    </div>
                </li>

                <li class="dropdown">
                    <a href = "https://theimaara.co.ke/entertainment">Entertainment</a>
                    <div class="dropdown-content">
    <!--
    <a href="#">The Manhattan</a>
                        <a href="#">Art Club</a>
                        <a href="#">Fantasy World</a>
                        <a href="#">TWS</a>
                    </div>
    -->
                        
                </li>

                <li class="dropdown">
                    <a href = "/sp/dine">Dine</a>
                    <div class="dropdown-content">
    <!--
    <a href="#">CJ's</a>
                        <a href="#">Big Knife</a>
                        <a href="#">Chicken Inn</a>
                        <a href="#">Pizza Inn</a>
                        <a href="#">Galitos</a>
                        <a href="#">Boba Cafe</a>
    -->
                        
                    </div>
                </li>
                <li class="dropdown">
                    <a href = "https://theimaara.co.ke/services" >Services</a>
                    <div class="dropdown-content">
    <!--
    <a href="#">KCB Bank</a>
                        <a href="#">Stanbic Bank</a>
                        <a href="#">DTB Bank</a>
                        <a href="#">Equity Bank</a>
                        <a href="#">Bank of Baroda</a>
                        <a href="#">TenderCare</a>
                        <a href="#">Optica</a>
                        <a href="#">V Spa</a>
    -->
                    
                    </div>
                </li>
            </ul>
            
        </nav>

        <!--black navbar-->
        <div class="nav-container">
            <ul class="links">
                <li><a href="">Offers</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="https://theimaara.co.ke/map/">Map</a></li>
                <li><a href="https://theimaara.co.ke/parking">Parking</a></li>
            </ul>
        </div>
        <!--Header-end-->

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const statusText = document.getElementById("status-text");
        const openTime = 8; // 8:00 AM
        const closeTime = 23; // 11:00 PM

        function updateStatus() {
            const now = new Date();
            const currentHour = now.getHours();

            if (currentHour >= openTime && currentHour < closeTime) {
                statusText.textContent = "Open till 11PM";
                statusText.style.color = "black";
            } else {
                statusText.textContent = "We are Closed";
                statusText.style.color = "red";
            }
        }

        updateStatus(); // Initial check
        setInterval(updateStatus, 1000 * 60); // Update status every minute
    });
    </script>

    <script>
    function updateClock() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const timeString = `${hours}:${minutes}:${seconds}`;
        document.getElementById('clock').textContent = timeString;
    }

    // Update the clock every second
    setInterval(updateClock, 1000);

    // Initial update
    updateClock();
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.querySelector(".menu-toggle");
        const menu = document.querySelector(".menu");

        menuToggle.addEventListener("click", function () {
            menu.classList.toggle("active");
        
            menuToggle.classList.toggle("active");
        });
    });
    </script>
</body>