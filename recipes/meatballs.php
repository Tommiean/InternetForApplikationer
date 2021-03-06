<?php
  session_start();
  $_SESSION['page']="recipes/meatballs.php";
?>


<!DOCTYPE html>
<html>
<title>Meatballs</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../reset.css">
<link rel="stylesheet" type="text/css" href="../seminarie1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
</style>

<body>
<div class="navbar">
<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="../calendar.php">Calendar</a></li>
  <li class="dropdown">
    <a href="../recipe.php" class="dropbtn">Recipes</a>
    <div class="dropdown-content">
      <a href="meatballs.php">Meatballs</a>
      <a href="pancakes.php">Pancakes</a>
    </div>
  </li>
 <?php
    if(isset($_SESSION['login_user']))
      echo '<li style="float:right; "><a href="../logout.php">Logout</a></li>';
    else
    {
      echo '<li style="float:right";><a href="../login.php">Login</a></li>';
      echo '<li style="float:right";><a href="../signup.php">Signup</a></li>';
    }
    
  ?>
</ul>
</div>


<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="ingredients">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="http://mittkok.expressen.se/wp-content/uploads/2013/12/kttbullar-recept-700x700.jpg" class="w3-round w3-image w3-opacity-min" alt="Meatballs" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      
     	<div class="w3-tag w3-light-grey">
      	<ul>
	      	<li><h3>Ingredients</h3></li>
	      	<li><h4>5 portions</h4></li>
	      	<li><h5>1 pound lean ground beef</h5></li>
	      	<li><h5>2 cloves garlic, chopped</h5></li>
	      	<li><h5>2 tablespoons diced onion</h5></li>
	      	<li><h5>1 egg</h5></li>
	      	<li><h5>½ teaspoon salt</h5></li>
	      	<li><h5>½ teaspoon ground black pepper</h5></li>
	      	<li><h5>2 tablespoons bread or cracker crumbs</h5></li>
	      	<li><h5>2 tablespoons chopped fresh parsley (optional)</h5></li>
	      	<li><h5>olive oil</h5></li>
		</ul>
    	</div>
    </div>
  	</div>

   	<div>
    <h1>Instructions</h1><br>
    	<ol>
    	<li><h6>Mix together all ingredients for the meatballs. Set aside.</h6></li>
    	<li><h6>Using a tablespoon scoop or spoon, form meatballs from the ground beef mixture. Heat 12-inch skillet or saute pan over medium heat. Drizzle in enough olive oil to lightly coat the bottom of the skillet to prevent meatballs from sticking. Drop formed meatballs into the heated skillet, turning occasionally to ensure that all sides of the meatball have been browned, about 7-10 minutes. Remove the meatballs from the skillet or saute pan and drain on a plate lined with paper towels.</h6></li>
    </ol>
	</div>
</div>
</div>
<div class="comments-container">
  <h3>Comments</h3>
  <?php
  include('../readcomments.php');
  if (isset($_SESSION['login_user'])) 
    include('../writecomments.php');
  ?>
</div>
 
</body>
</body>
</html>
