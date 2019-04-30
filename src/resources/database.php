<?php
	include "My_DB_Functions.php";


	if(($_POST["username"] == "admin" && $_POST["passwrd"] == "admin")|| ($_SESSION["user"] == "admin"))
    {
    	$_SESSION["user"] = "admin";
        echo "You have successfully logged in!";
        echo "<br>";
        echo "<a href='announcements-post.php'>Click Here</a> to return to admin posting page.";
    }
    else
    {
    	echo "<br>";
    	echo "Your user name or password is not correct. Try again<br/>";
        echo "<br>";
        echo "<a href='index.html'>Click Here</a> to return to previous page.";
    }
?>
