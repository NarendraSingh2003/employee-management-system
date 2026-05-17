<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$salary = $_POST['salary'];
$joining_date = $_POST['joining_date'];

$query = "INSERT INTO employees
(name,email,phone,department,salary,joining_date)

VALUES

('$name','$email','$phone',
'$department','$salary','$joining_date')";

if(mysqli_query($conn,$query)){

    header("Location: employees.php");

}else{

    echo "Error";

}

?>

