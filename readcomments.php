
<?php
    $page = $_SESSION['page'];
 
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"tastyrecipe");
    $query = mysqli_query($connection, "select * from comments where page='$page'");
    while($row = $query->fetch_array(MYSQLI_ASSOC))
    {
        $comment = $row['comment'];
        $username = $row['username'];
        $comment = htmlspecialchars($comment);
        $username = htmlspecialchars($username);
        $time = $row['time'];
        if(!isset($_SESSION['login_user']))
            echo
            '<div class="comment">
                <p id="comment">' . $comment . '</p>
                <div class="posted">
                   <p>Posted by ' . $username . ' on ' . $time . '</p>
                </div>
            </div><hr>';
        else if(strtolower($_SESSION['login_user']) == strtolower($row['username']))
        {
 
 
            echo
            '<div class="comment">
                <p id="comment">' . $comment . '</p>
                <div class="posted">
                    <p>Posted by ' . $username . ' on ' . $time . '</p>
                    <form id = "delete" action="" method="POST">
                        <input id="hidden" type="hidden" name="timestamp" value="' . $time . '">
                        <button name = "deletecomment">&#x2715</button>
                    </form>
                </div>
            </div><hr>';
           
        }
        else
            echo
            '<div class="comment">
                <p id="comment">' . $comment . '</p>
                <div class="posted">
                   <p>Posted by ' . $username . ' on ' . $time . '</p>
                </div>
            </div><hr>';
    }
    if(isset($_POST['deletecomment']))
    {
        $username = $_SESSION['login_user'];
        $time=$_POST['timestamp'];
        mysqli_query($connection, "delete from comments where time='$time' and username='$username'");
        echo "<meta http-equiv='refresh' content='0'>";
 
    }
    mysqli_close($connection); // Closing Connection
   
?>
 