<?php
  session_start();
  $_SESSION['page']="recipe.php";
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="../reset.css">
<link rel="stylesheet" type="text/css" href="seminarie1.css">
<link rel="stylesheet" type="text/css" href="recipe.css">
<meta charset="utf-8">
<title>Recipes</title>

<style>
.verticalnavbar {
  float: left;
  opacity: 0.3;
}
.verticalnavbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    height: 568px;
    background-color: #f1f1f1;
}

.verticalnavbar li a, p {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
.verticalnavbar li a:hover {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>


<div class="navbar">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="calendar.php">Calendar</a></li>
  <li class="dropdown">
    <a href="recipe.php" class="dropbtn">Recipes</a>
    <div class="dropdown-content">
      <a href="recipes/meatballs.php">Meatballs</a>
      <a href="recipes/pancakes.php">Pancakes</a>
    </div>
  </li>
  <?php
    if(isset($_SESSION['login_user']))
      echo '<li style="float:right; "><a href="logout.php">Logout</a></li>';
    else
    {
      echo '<li style="float:right";><a href="login.php">Login</a></li>';
      echo '<li style="float:right";><a href="signup.php">Signup</a></li>';
    }
    ?>
</ul>
</div>


<div class="bgrec">
<div class="verticalnavbar">
<ul>
  <li><a>Recipes</a></li>
  <li><a href="recipes/meatballs.php">Meatballs</a></li>
  <li><a href="recipes/pancakes.php">Pancakes</a></li>
  <li><a href="recipes/meatballs.php">Meatballs</a></li>
  <li><a href="recipes/pancakes.php">Pancakes</a></li>
  <li><a href="recipes/meatballs.php">Meatballs</a></li>
  <li><a href="recipes/pancakes.php">Pancakes</a></li>
  <li><a href="recipes/meatballs.php">Meatballs</a></li>
  <li><a href="recipes/pancakes.php">Pancakes</a></li>
  <li><a href="recipes/meatballs.php">Meatballs</a></li>
  <li><a href="recipes/pancakes.php">Pancakes</a></li>
</ul>
</div>

<div class="bgrec">
<div class="responsive">
  <div class="gallery">
    <a href="recipes/meatballs.php">
      <img src="http://mittkok.expressen.se/wp-content/uploads/2013/12/kttbullar-recept-700x700.jpg" alt="Meatballs" width="300" height="200">
    </a>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="recipes/pancakes.php">
      <img src="bilder/pancakes.jpg" alt="Pancakes" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="recipes/meatballs.php">
      <img src="http://mittkok.expressen.se/wp-content/uploads/2013/12/kttbullar-recept-700x700.jpg" alt="Meatballs" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="recipes/pancakes.php">
      <img src="bilder/pancakes.jpg" alt="Pancakes" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="recipes/pancakes.php">
      <img src="bilder/pancakes.jpg" alt="Pancakes" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="recipes/meatballs.php">
      <img src="http://mittkok.expressen.se/wp-content/uploads/2013/12/kttbullar-recept-700x700.jpg" alt="Meatballs" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="recipes/pancakes.php">
      <img src="bilder/pancakes.jpg" alt="Pancakes" width="600" height="400">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="recipes/meatballs.php">
      <img src="http://mittkok.expressen.se/wp-content/uploads/2013/12/kttbullar-recept-700x700.jpg" alt="Meatballs" width="600" height="400">
    </a>
  </div>
</div>
</div>
</div>


</body>
</html>
