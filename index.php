<?php
  session_start();
  $_SESSION['page']="index.php";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="seminarie1.css">
<title>Home</title>
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
<img src="bilder/banner.png" id="banner" alt="Welcome banner" style="width: 100%">
<div class="index">
  <h1>Hey and welcome to Tasty Recipes!</h1>
  <p>Do you often find yourself in situations where you don't know what to eat and when? If so then this newly developed site is for you. With help of our <a class="callink" href="calendar.php">calendar</a> will you get recipes each day every month as well as access to our old recipes if you found something particuary good!</p>
</div>

</body>