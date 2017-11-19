<html>
<head>
<title>Signup</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="seminarie1.css">
</head>



<?php
if (isset($_POST['commentsubmit']))
{
		$page = $_SESSION['page'];
		$username = $_SESSION['login_user'];
		$comment = $_POST['comment'];
		$connection = mysqli_connect("localhost", "root", "");
		$comment = stripslashes($comment);
		$comment = mysqli_real_escape_string($connection,$comment);
		$db = mysqli_select_db($connection,"tastyrecipe");
		mysqli_query($connection, "insert into comments (username, comment, page) values('$username', '$comment', '$page')");
		echo "<meta http-equiv='refresh' content='0'>";
}

?>
<body>
<br>
<div class="kommentar">
<form id="login-form" action="" method="POST" autocomplete="off">
	<input type = "text" name = "comment" placeholder = "Write your comment here" required></br>
    <button name = "commentsubmit">Submit</button>
</form>
</div>
</body>
</html>