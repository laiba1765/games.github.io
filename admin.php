<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCtype html>
<html>
    <head>
        <title>Admin site</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
    </head>
    <body>
        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="camera-outline"></ion-icon></span>
                            <span class="Ttitle">Sulphites Studio</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">Main Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="comingBookings.php">
                            <span class="icon"><ion-icon name="play-skip-forward-outline"></ion-icon></span>
                            <span class="title">Coming Bookings</span>
                        </a>
                    </li>
                    <li>
                        <a href="previousBooking.php">
                            <span class="icon"><ion-icon name="play-skip-back-outline"></ion-icon></span>
                            <span class="title">Previous Bookings</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="logout.php">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="title">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main">
                <div class= "top">
                    <p>ADMIN SIDE</p>
                </div>
                <div class="topbar">
                    <div class="toggle"><ion-icon name="grid-outline"></ion-icon></div>
                </div>
            </div>
            <div class= "center">
                    <p> WELCOME TO ADMIN PANEL</P>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
        
           let toggle=document.querySelector('.toggle');
           let navigation=document.querySelector('.navigation');
           let main=document.querySelector('.main');
           toggle.onclick=function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
           }
        </script>

    </body>
</html>