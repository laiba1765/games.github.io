<?php
include 'connection.php';
include 'session_check.php';
if(isset($_SESSION['user_panel_session_username']) && !empty($_SESSION['user_panel_session_username'])) { 
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="about.css">
  

</head>
<body>

   
</body><header>
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
<div class="wrapper">
    <h1>ABOUT US</h1>
    <div class="our_team">
        <div class="team_member">
          <div class="member_img">
             <img src="img/Member1.png" alt="our_team">
            <div class="social_media">
               <div class="facebook item"><i class="fab fa-facebook-f"></i></div>
               <div class="twitter item"><i class="fab fa-twitter"></i></div>
               <div class="instagram item"><i class="fab fa-instagram"></i></div>
             </div>
          </div>
          <h3>Ayesha Rashid</h3>
          <span>DEVELOPER</span>
          <b>
          <pre> Hello Everyone !
I'm Ayesha Rashid,
  I also love to play games,been
  And playing games since last 
  4 years
 I mostly play Action Gameslike
COD
GTA 5
PUBG
     
          </pre>
          </b>
        </div>
        <div class="team_member">
           <div class="member_img">
             <img src="img/ADMIN.png" alt="our_team">
             <div class="social_media">
               <div class="facebook item"><i class="fab fa-facebook-f"></i></div>
               <div class="twitter item"><i class="fab fa-twitter"></i></div>
               <div class="instagram item"><i class="fab fa-instagram"></i></div>
             </div>
          </div>
          <h3>Laiba Choudhary</h3>
          <span>ADMIN</span>
         <b> <pre>
Hey everyone!
 I'm Laiba Ch
 People like to call me "Laiby"
I really liked gaming i am a pro 
player
I played some good games like 
Valorant
CSGO
Fortnite
    </pre>
    </b>

    
      </div>
        <div class="team_member">
           <div class="member_img">
             <img src="img/Member2.png" alt="our_team">
             <div class="social_media">
               <div class="facebook item"><i class="fab fa-facebook-f"></i></div>
               <div class="twitter item"><i class="fab fa-twitter"></i></div>
               <div class="instagram item"><i class="fab fa-instagram"></i></div>
             </div>
          </div>
          <h3>Shahneela Hameed</h3>
          <span>EDITOR</span>
          <b><pre>
Hi peeps!
My name is shehneela Hameed
I love to play games all the time
I'm a dedicated gamer who 
recently plays tick cross 
such a lovely game
When you have nothing to do</pre>
</b>
      </div>
        

</div>	

</body>
</html>