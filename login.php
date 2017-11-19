<html>
<head>
<title>Signup</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="seminarie1.css">
</head>


    <?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// Selecting Database
$db = mysqli_select_db($connection,"tastyrecipe");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection, "select * from user where password='$password' AND username='$username'");

if($query->num_rows ==1)
{
  $_SESSION['login_user']=htmlspecialchars($username); // Initializing Session
  header("location: ". $_SESSION['page']); // Redirecting To Other Page
}

else 
{
  $error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
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
      echo '<li style="float:right";><a href="signup.php">Signup</a></li>';
 
  ?>
</ul>
</div>  
<img src="bilder/banner.png" id="banner" alt="Welcome banner" style="width: 100%">
   <div class="Signup-login">
    <h1>Login</h1>
    <form action="" method="POST">
      <input id="username" type = "text" name = "username" placeholder = "username" autofocus required></br>
        <input id="password" type = "password" name = "password" placeholder = "password" required></br>
        <button name = "submit">Login</button>
        <span><?php echo $error; ?></span>
    </form>
</div>
</body>
</html>  