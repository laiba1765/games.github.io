<?php
include 'connection.php';
include 'session_check.php';
if(isset($_SESSION['user_panel_session_username']) && !empty($_SESSION['user_panel_session_username'])) 
{ 
    $user_panel_session_username = $_SESSION['user_panel_session_username'];
    $user_detail_query  = mysqli_query($conn, "SELECT * from users where `user_email` ='$user_panel_session_username'");
    $row  = mysqli_fetch_array($user_detail_query);
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $user_email = $row['user_email'];
}
?>


<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Games Portal</title>
<link rel="stylesheet" href="Gallery.css">

</head>
<body>

   <header>
     <div class="whole">
 
        <div class="logo">
           <img src= "img/Logo.png" height=75px width=160px>
        </div>
     
     <ul class="nav-area">
        <li><a href="index.php">Home</a></li>
        <li><a href="Games.php">Games</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        <li><a href="about.php">About </a></li>
        <li><a href="CONTACT.php">Contact us</a></li>
        <li><a href="redirect.php">Logout</a></li>
        <li><a href="faq.php">faq</a></li>
        
        <?php
            if(isset($_SESSION['user_panel_session_username']) && !empty($_SESSION['user_panel_session_username'])) { 
                ?>
                <li><a href="logout.php"><?php echo $user_name; ?>: LogOut</a></li>
                <?php
                    }else{
                    ?>
                    <li><a href="login.html">LogIn</a></li>
                    <?php
                    }
                ?>
      </ul>
     </div>
  </header>      
  <body>
        <div class="backgroundDiv">
            <div class="Div1">
                <img src="img/Bubble1.jpg">
                <a>BUBBLE SHOOTER </a>
            </div>

                <div class="Div2">
                    <img src="img/Subway1.png">
                   <a>SUBWAY SURFERS</a>
                </div>

                <div class="Div3">
                    <img src="img/Temple1.png">
                    <a>TEMPLE RUN</a>
                 </div>

				 <div class="Div4">
                    <img src="img/Jigsaw1.jpg">
                    <a >JIGSAW PUZZEL</a>
                 </div>

				 <div class="Div5">
                    <img src="img/PianoTiles1.png">
                    <a>PIANO TILES</a>
                 </div>
				 <div class="Div6">
                    <img src="img/Hero1.png">
                    <a>GRAND-PRIX-HERO-GRAND</a>
                 </div>
				 <div class="Div7">
                    <img src="img/Tictactoe1.JPG">
                    <a>TIC-TAC-TOE</a>
                 </div>

				 <div class="Div8">
                    <img src="img/Doodle-Jump1.jpg">
                    <a >DOODLE-JUMP</a>
                 </div>

				 <div class="Div9">
                    <img src="img/Quiz1.avif">
                    <a>IMPOSSIBLE-QUIZ</a>
                 </div>

				 <div class="Div10">
                    <img src="img/Search1.png">
                    <a > CLASSIC-WORDS SEARCH</a></div></a>
                 </div>

				 <div class="Div11">
                    <img src="img/Ludo1.jpg">
                    <a> LUDO</a>
                 </div>

				 <div class="Div12">
                    <img src="img/Roller1.png">
                    <a> ROLLER-COASTER</a></div></a>
                 </div>
        </div> 
        </body>
        </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ></a>