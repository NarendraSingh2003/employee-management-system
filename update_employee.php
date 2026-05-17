
<?php

include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$salary = $_POST['salary'];
$joining_date = $_POST['joining_date'];

$query = "UPDATE employees SET

name='$name',
email='$email',
phone='$phone',
department='$department',
salary='$salary',
joining_date='$joining_date'

WHERE id='$id'";

mysqli_query($conn,$query);

header("Location: employees.php");

?>