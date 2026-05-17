<!DOCTYPE html>
<html>
<head>

<title>Add Employee</title>

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
    border-radius:10px;
}

input{
    width:100%;
    padding:10px;
    margin-top:10px;
}

button{
    width:100%;
    padding:10px;
    background:green;
    color:white;
    border:none;
    margin-top:15px;
}

</style>

</head>

<body>

<div class="form-box">

<h2>Add Employee</h2>

<form action="save_employee.php" method="POST">

<input type="text" name="name" placeholder="Name">

<input type="email" name="email" placeholder="Email">

<input type="text" name="phone" placeholder="Phone">

<input type="text" name="department" placeholder="Department">

<input type="number" name="salary" placeholder="Salary">

<input type="date" name="joining_date">

<button type="submit">Save Employee</button>

</form>

</div>

</body>
</html>

