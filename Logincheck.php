<?php      
    include('dbconfig.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        
        $sql = "select * from login where email = '$username' and password = '$password'";
echo $sql;		
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
		session_start();
		$_SESSION["ses_user"] = $username;
            header("Location: Mainpage.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>