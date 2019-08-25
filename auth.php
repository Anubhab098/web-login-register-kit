<?php

include('include/db-config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM details where username=? AND password=? LIMIT 1";


$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch()){

	echo "Successfully looged in";
     die();
}
else{

	echo "Failed to looged in";
	die();
}









?>