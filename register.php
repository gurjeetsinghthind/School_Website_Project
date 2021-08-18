<?php      
    include('dbconfig.php');  
    $username = $_POST['user'];
	$email = $_POST['email'];
    $password = $_POST['pass'];  
      $sql = "insert into login (username,password,email) values('".$username."','".$password."','".$email."')";  
	  echo $sql;
        $result = mysqli_query($conn, $sql);  
        echo "<h1><center> Register successful </center></h1>";  
?>