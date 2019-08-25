<?php
include('submit-inc-db-config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO details (username, password) values(?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

echo "Registered Successfully pls go to login password";










?>