<!DOCTYPE html>
<html>
<head>
	<title>ADMIN REGISTRATION</title>
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
	margin-top: -2.5px;
}

    </style>
</head>
<body>
	<form action="register-d.php" method="post">
		<h2 style="color:white" >REGISTER</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
	
		<input class="length-menu" type="text" name="uname" placeholder="User Name"><br>

	<input class="length-menu" type="text" name="name" placeholder="Name"><br>

	
	<input class="length-menu"type="password" name="password" placeholder="Password"><br>

	<button type="submit">Register</button>
    <button>	<a class="text-ee" href="index.php">Login</a></button>
</form>
</body>
</html>