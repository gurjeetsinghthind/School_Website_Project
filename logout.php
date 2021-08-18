<?php
session_start();
unset($_SESSION["ses_user"]); 
header("Location: index.php");
?>