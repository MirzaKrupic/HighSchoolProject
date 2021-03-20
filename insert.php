<?php
$servername = "sql100.epizy.com";
$username = "epiz_23602024";
$password = "JcdxkedWnm";
$db = "epiz_23602024_registration";

$user=  $_POST["username"];
$passa=  $_POST["email"];
$mail = $_POST['password_1'];


$sql="INSERT INTO users(username, email, password)
values ('$user','$passa','$mail')";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo $user;
    echo $passa;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>