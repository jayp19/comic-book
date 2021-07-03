<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
/*if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}*/
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>
<body>
  <nav>
    <div class="wrapper">

      <div class="logo"><a href="..\home.html">ComBook</a></div>
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
            <li><a href="#">Marvel</a></li>
            <li><a href="#">Dc</a></li>
            <li><a href="#">Adventure</a></li>
            <li><a href="#">Action</a></li>
            <li><a href="#">sport</a></li>
          </ul>
        </li>
        <li><a href="#">Anime</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Feedback</a></li>
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

<div class="row">
	<div class="column">
		<a href="1966 Captain America Coloring Book.pdf">
    <img src="img\1966 Captain America Coloring Book.png"  style="max-width: 200px; height: auto;" alt="Modern Family">
	   </a>
  </div>
	<div class="column">
		<a href="1966 Captain America Coloring Book.pdf">
    <img src="img\1966 Captain America Coloring Book.png"  style="max-width: 200px; height: auto;" alt="Modern Family">
	   </a>
  </div>
	<div class="column">
		<a href="1966 Captain America Coloring Book.pdf">
    <img src="img\1966 Captain America Coloring Book.png"  style="max-width: 200px; height: auto;" alt="Modern Family">
	   </a>
  </div>

	<div class="column">
		<a href="1966 Captain America Coloring Book.pdf">
    <img src="img\1966 Captain America Coloring Book.png"  style="max-width: 200px; height: auto;" alt="Modern Family">
	   </a>
  </div>

	<div class="column">
		<a href="1966 Captain America Coloring Book.pdf">
    <img src="img\1966 Captain America Coloring Book.png"  style="max-width: 200px; height: auto;" alt="Modern Family">
	   </a>
  </div>

	<div class="column">
		<a href="1966 Captain America Coloring Book.pdf">
    <img src="img\1966 Captain America Coloring Book.png"  style="max-width: 200px; height: auto;" alt="Modern Family">
	   </a>
  </div>
</div>



</body>
</html>
