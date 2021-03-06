<?php
  session_start();
  $_SESSION['page']="calendar.php";
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="seminarie1.css">
<link rel="stylesheet" type="text/css" href="calendar.css">
<title>Calendar</title>
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

<div class="month"> 
  <ul>
    <li>
      November<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li><span class="active">6</span></li>
  <li>7</li>
  <li id="meatballs"><a href="recipes/meatballs.php">8</a></li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li id="pancakes"><a href="recipes/pancakes.php">17</a></li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
</ul>

</body>
</html>