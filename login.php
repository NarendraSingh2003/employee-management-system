<?php

session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admins 
WHERE username='$username' 
AND password='$password'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){

    $_SESSION['admin']=$username;

    header("Location: dashboard.php");

}else{

    echo "Invalid Login";

}

?>