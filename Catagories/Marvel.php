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

      <div class="logo"><a href="..\home.php">ComBook</a></div>
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
  <p>Marvel</p>
</div>
<p style="margin-left: 20px;margin-right: 20px">
Marvel Comics is the brand name and primary imprint of Marvel Worldwide Inc., formerly Marvel Publishing, Inc. and Marvel Comics Group, a publisher of American comic books and related media. In 2009, The Walt Disney Company acquired Marvel Entertainment, Marvel Worldwide's parent company.

Marvel was started in 1939 by Martin Goodman under a number of corporations and imprints but now known as Timely Comics,[2] and by 1951 had generally become known as Atlas Comics. The Marvel era began in 1961, the year that the company launched The Fantastic Four and other superhero titles created by Stan Lee, Jack Kirby, Steve Ditko and many others. The Marvel brand, which had been used over the years, was solidified as the company's primary brand.
<a href="https://en.wikipedia.org/wiki/Marvel_Comics">for more info<a/>
</p>
<div class="h">
  <p>Books:</p>
</div>
<center>
<div class="row">
<a href="comics\1966 Captain America Coloring Book.pdf">
<img src="img\1966 Captain America Coloring Book.png"  class="responsive" width="49.8%" height="49%" style="background: white;max-width: 200px" alt="Modern Family">
</a>

<a href="comics\Avengers Coast To Coast.pdf">
<img src="img\Avengers Coast To Coast.png"  class="responsive" width="49.8%" height="49%" style="max-width: 200px" alt="Modern Family">
</a>

<a href="comics\Captain America and Iron Man.pdf">
<img src="img\Captain America and Iron Man.png"  class="responsive" width="49.8%" height="49%" style="max-width: 200px" alt="Modern Family">
</a>

<a href="comics\Spider-Man Jumbo Coloring & Activity.pdf">
<img src="img\Spider-Man Jumbo Coloring & Activity.png"  class="responsive" width="49.8%" height="49%" style="max-width: 200px" alt="Modern Family">
</a>

<a href="comics\spiderman-comic.pdf">
<img src="img\spiderman-comic.png"  class="responsive" width="49.8%" height="49%" style="max-width: 200px" alt="Modern Family">
</a>

<a href="comics\Ultimate Spiderman001.pdf">
<img src="img\Ultimate Spiderman1.png"  class="responsive" width="49.8%" height="49%" style="max-width: 200px" alt="Modern Family">
</a>

<a href="comics\Ultimate Spiderman002.pdf">
<img src="img\Ultimate Spiderman2.png"  class="responsive" width="49.8%" height="49%" style="max-width: 200px" alt="Modern Family">
</a>

<a href="comics\Iron Man_ The Ultimate Guide to the Armored Super Hero.pdf">
<img src="img\Iron Man_ The Ultimate Guide to the Armored Super Hero.png"  class="responsive" width="49.8%" height="49%" style="max-width: 200px" alt="Modern Family">
</a>

</div>
</center>
</body>
</html>
