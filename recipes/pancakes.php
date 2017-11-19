<?php
  session_start();
  $_SESSION['page']="recipes/pancakes.php";
?>

<!DOCTYPE html>
<html>
<title>Pancakes</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../reset.css">
<link rel="stylesheet" type="text/css" href="../seminarie1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
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
     <img src="http://images.media-allrecipes.com/userphotos/720x405/3500474.jpg" class="w3-round w3-image w3-opacity-min" alt="Pancakes" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      
     	<div class="w3-tag w3-light-grey"> 
      	<ul>
	      	<li><h3>Ingredients</h3></li>
	      	<li><h4>4 portions</h4></li>
	      	<li><h5>4 eggs</h5></li>
	      	<li><h5>2 cups milk</h5></li>
	      	<li><h5>1/2 cup all-purpose flour</h5></li>
	      	<li><h5>1 tablespoon sugar</h5></li>
	      	<li><h5>1 pinch salt</h5></li>
	      	<li><h5>2 tablespoons melted butter</h5></li>
		  </ul>
    	</div>
    </div>
  </div>

  <div>
  <h1>Instructions</h1><br>
    	<ol>
    	<li><h6>In a large bowl, beat eggs with a wire whisk. Mix in milk, flour, sugar, salt, and melted butter.</h6></li>
    	<li><h6>Preheat a non-stick electric skillet to medium heat. Pour a thin layer of batter on skillet, and spread to edges. Cook until top surface appears dry. Cut into 2 or 4 sections, and flip with a spatula. Cook for another 2 minutes, or until golden brown. Roll each pancake up, and serve.</h6></li>
    </ol>
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
</html>
