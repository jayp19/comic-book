<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ..\login.php");
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
    .h{
      font-size: 30px;
      padding-top: 80px;
      color: black;
      font-weight: 600;
      margin-left: 20px;
    }
    .responsive {
      max-width: auto;
      height: auto;
      padding: 20px;
      text-align: center;
      /*margin-left: auto;
      margin-right: auto;*/
      display:inline-block;
    }

@media screen and (max-width: 570px) {
  .responsive {
    margin-left: auto;
    margin-right: auto;
    display: block;
    min-width: 200px;
  }
}

    .row{
      padding-top: 30px;
      background:
    }

  .row img{
      Padding:30px;
      transition: transform .1s;
      max-width: auto;

    }

    img:hover {
      -ms-transform: scale(1.2); /* IE 9 */
      -webkit-transform: scale(1.2); /* Safari 3-8 */
      transform: scale(1.2);
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
        <li><a href="..\home.php">Home</a></li>
        <li>
          <a href="#" class="desktop-item">Categories</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Categories</label>
          <ul class="drop-menu">
            <li><a href="Marvel.php">Marvel</a></li>
            <li><a href="dc.php">Dc</a></li>
          </ul>
        </li>
        <li><a href="anime.php">Anime</a></li>
        <li><a href="..\aboutus.php">About</a></li>
        <li><a href="..\reset-password.php">Change password</a></li>
        <li>
          <a href="#" class="desktop-item">Account</a>
          <input type="checkbox" id="showDropp">
          <label for="showDropp" class="mobile-item">Account</label>
          <ul class="drop-menu">
            <li><a href="#"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
            <li><a href="..\logout.php">Sign out</a></li>
          </ul>
        </li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>


<div class="h">
  <p>Anime</p>
</div>
<p style="margin-left: 20px;margin-right: 20px;">
  Anime (Japanese: アニメ, IPA: [aɲime] (About this soundlisten)) is hand-drawn and computer animation originating from Japan. Anime, a term derived from the English word animation, in Japanese describes all animated works, regardless of style or origin. Outside of Japan, anime refers specifically to animation produced in Japan or to its common style, which has since been adopted by a minority of works produced in other countries.

The earliest commercial Japanese animations date to 1917. A characteristic art style emerged in the 1960s with the works of cartoonist Osamu Tezuka and spread in following decades, developing a large domestic audience. Anime is distributed theatrically, through television broadcasts, directly to home media, and over the Internet. In addition to original works, anime are often adaptations of Japanese comics (manga), light novels, or video games. It is classified into numerous genres targeting various broad and niche audiences.
<a href="https://en.wikipedia.org/wiki/Anime">for more info<a/>
</p>
<div class="h">
  <p>Books:</p>
</div>
<center>
<div class="row">
<a href="onepunch.php">
<img src="img\onepunch.png"  class="responsive" width="49.8%" height="49%" style="background: white;max-width: 200px" alt="Modern Family">
</a>

<a href="haikyuu.php">
<img src="img\haikyuu.png"  class="responsive" width="49.8%" height="49%" style="max-width: 200px" alt="Modern Family">
</a>

<a href="drstone.php">
<img src="img\drstone.png"  class="responsive" width="49.8%" height="49%" style="max-width: 200px" alt="Modern Family">
</a>

<a href="drstone.php">
<img src="img\tokyo.png"  class="responsive" width="49.8%" height="49%" style="max-width: 200px" alt="Modern Family">
</a>

<a href="tssdk.php">
<img src="img\tssdk.jpg"  class="responsive" width="49.8%" height="49%" style="max-width: 200px" alt="Modern Family">
</a>

</div>
<a href="https://mangatoon.mobi/">For more books click here..</a>
</center>
</body>
</html>
