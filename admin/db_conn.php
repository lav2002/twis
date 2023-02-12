<?php

$sname= "localhost";
$unmae= "u459776494_twisd";
$password = "Lav@9868";

$db_name = "u459776494_twisd";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>