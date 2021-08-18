<?php
session_start();
 echo "You are login with ".$_SESSION["ses_user"];
 
 ?></br></br><a href="logout.php">Logout</a><?php
?>