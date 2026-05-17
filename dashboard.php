<?php

session_start();

if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}

include 'db.php';

$total = mysqli_query($conn,"SELECT * FROM employees");

$count = mysqli_num_rows($total);

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
}

.container{
    width:90%;
    margin:auto;
}

.card{
    background:white;
    padding:20px;
    margin-top:20px;
    border-radius:10px;
}

a{
    text-decoration:none;
}

button{
    padding:10px 20px;
    background:blue;
    color:white;
    border:none;
}

</style>

</head>

<body>

<div class="container">

    <h1>Employee Dashboard</h1>

    <div class="card">

        <h2>Total Employees : <?php echo $count; ?></h2>

        <a href="add_employee.php">
            <button>Add Employee</button>
        </a>

        <a href="employees.php">
            <button>View Employees</button>
        </a>

        <a href="logout.php">
            <button>Logout</button>
        </a>

    </div>

</div>

</body>
</html>
