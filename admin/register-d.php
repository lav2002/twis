<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['name']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$name = validate($_POST['name']);
	$password = validate($_POST['password']);
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	if (empty($uname)) {
		header("Location: register.php?error=User Name is required");
	    exit();
	}else if(empty($name)){
		header("Location: register.php?error=Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: register.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=User Name already exists");
	        exit();
		}else{
			$sql = "INSERT INTO users (user_name, name, password) VALUES ('".mysqli_real_escape_string($conn, $uname)."', '".mysqli_real_escape_string($conn, $name)."', '".mysqli_real_escape_string($conn, $password)."')";

			if (mysqli_query($conn, $sql)) {
				header("Location: index.php?success=User registered successfully");
				exit();
			}else{
				header("Location: register.php?error=Error in registering user");
				exit();
			}
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}