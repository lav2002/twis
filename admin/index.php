<!DOCTYPE html>
<html>

<head>
	<title>ADMIN LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style>
        .text-ee
    {
        color: inherit;
        text-decoration: none;
      
}
.length-menu{
	width: 300px;
}
    </style>
</head>

<body>
	<form action="login.php" method="post">
		<h2 style="color: white;">LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<center><label style="color: white;">User Name</label></center>
		<input class="length-menu" type="text" name="uname" placeholder="User Name"><br>

		<center><label style="color: white;">Password</label></center>
		<input class="length-menu" type="password" name="password" placeholder="Password"><br>

		<button type="submit">Login</button>
		
		<button>	<a class="text-ee" href="register.php">Register</a></button>
	</form>
</body>

</html>