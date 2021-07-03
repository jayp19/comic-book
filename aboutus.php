<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <style>
h2{
  padding-top: 80px;
}
.about{
  margin-left: 50px;
}
.about p{
  margin-left: 60px;
}
.contact-info{
  margin-left: 60px;
}
    </style>
</head>
<body>
  <nav>
    <div class="wrapper">

      <div class="logo"><a href="home.php">ComBook</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="home.php">Home</a></li>
        <li>
          <a href="#" class="desktop-item">Categories</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Categories</label>
          <ul class="drop-menu">
            <li><a href="Catagories\Marvel.php">Marvel</a></li>
            <li><a href="Catagories\dc.php">Dc</a></li>
          </ul>
        </li>
        <li><a href="Catagories\anime.php">Anime</a></li>
        <li><a href="Aboutus.php">About</a></li>
        <li><a href="reset-password.php">Change password</a></li>
        <li>
          <a href="#" class="desktop-item">Account</a>
          <input type="checkbox" id="showDropp">
          <label for="showDropp" class="mobile-item">Account</label>
          <ul class="drop-menu">
            <li><a href="#"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
            <li><a href="logout.php">Sign out</a></li>
          </ul>
        </li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
  <div class="about">
        <h2>About Us:</h2>
        <br>
        <h4>Developers:</h4>
        <p>JAY PANCHAL</p>
        <p>BHAVNA SARKAR</p>
        <p>ATHARVA BAGWE</p>
        <br>
        <h4>Contact information:</h4>

        <div class="contact-info">
          <div><i class="fas fa-map-marker-alt"></i>Mumbai, Maharashtra</div>
          <div><i class="fas fa-envelope"></i>combook@gmail.com</div>
          <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
</div>
</body>
</html>
