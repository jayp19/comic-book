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
</head>
<body>
  <nav>
    <div class="wrapper">

      <div class="logo"><a href="home.php">ComBook</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <!--<li><a href="home.php">Home</a></li>-->
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
          <input type="checkbox" id="showDroppp">
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


  <div class="main-carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
    <div class="carousel-cell">
      <a href="Catagories\comics\Iron Man_ The Ultimate Guide to the Armored Super Hero.pdf">
    <img src="img/1.jpeg"/></a>
    </div>
    <div class="carousel-cell">
      <a href="Catagories\comics\DC Marvel Comics - Batman & Spiderman.pdf">
    <img src="img/2.jpeg"/></a>
    </div>
    <div class="carousel-cell">
      <a href="Catagories\haikyuu.php">
    <img  src="img/3.jpeg"/></a>
    </div>
    <div class="carousel-cell">
      <a href="Catagories\onepunch.php">
    <img src="img/4.jpeg"/></a>
    </div>
    <div class="carousel-cell">
      <a href="Catagories\comics\Spider-Man Jumbo Coloring & Activity.pdf">
    <img src="img/5.jpeg"/></a>
    </div>
  </div>

</body>
</html>
