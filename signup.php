<html>
<head>
<title>Signup</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="seminarie1.css">
</head>


<?php
session_start();
$error="";
if (isset($_POST['signup']))
{
		$connection = mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($connection,"tastyrecipe");
		$username = $_POST['username'];
		$query = mysqli_query($connection, "select * from user where username='$username'");
		if(!$query->num_rows ==1)
		{
			$passowrd = $_POST['password'];
			mysqli_query($connection, "insert into user (username,password) values('$username', '$passowrd')");
			header("location: index.php");
  		}	
		else
			$error = "Username already exists";
}
?>
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
      echo '<li style="float:right";><a href="login.php">Login</a></li>';
 
  ?>
</ul>
</div>  
<img src="bilder/banner.png" id="banner" alt="Welcome banner" style="width: 100%">
<div class="Signup-login">
	<h1>Signup</h1>
    <form action="" method="POST">
    	<input id="username" type = "text" name = "username" placeholder = "username" autofocus required></br>
        <input id="password" type = "password" name = "password" placeholder = "password" required><br>
        <button name = "signup">Signup</button>
      	<span><?php echo $error; ?></span>
    </form>
</div>
</body>
</html>