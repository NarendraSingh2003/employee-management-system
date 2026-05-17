<?php

include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn,
"SELECT * FROM employees WHERE id='$id'");

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Employee</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
}

.form-box{
    width:500px;
    margin:auto;
    background:white;
    padding:20px;
    margin-top:30px;
}

input{
    width:100%;
    padding:10px;
    margin-top:10px;
}

button{
    width:100%;
    padding:10px;
    background:blue;
    color:white;
    border:none;
    margin-top:15px;
}

</style>

</head>

<body>

<div class="form-box">

<h2>Edit Employee</h2>

<form action="update_employee.php" method="POST">

<input type="hidden" name="id"
value="<?php echo $row['id']; ?>">

<input type="text" name="name"
value="<?php echo $row['name']; ?>">

<input type="email" name="email"
value="<?php echo $row['email']; ?>">

<input type="text" name="phone"
value="<?php echo $row['phone']; ?>">

<input type="text" name="department"
value="<?php echo $row['department']; ?>">

<input type="number" name="salary"
value="<?php echo $row['salary']; ?>">

<input type="date" name="joining_date"
value="<?php echo $row['joining_date']; ?>">

<button type="submit">Update Employee</button>

</form>

</div>

</body>
</html>
