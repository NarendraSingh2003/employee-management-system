<?php

include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM employees");

?>

<!DOCTYPE html>
<html>
<head>

<title>Employees</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
}

table{
    width:100%;
    background:white;
    border-collapse:collapse;
}

table th, table td{
    padding:12px;
    border:1px solid #ccc;
}

a{
    text-decoration:none;
}

.btn{
    padding:6px 10px;
    color:white;
    border-radius:5px;
}

.edit{
    background:orange;
}

.delete{
    background:red;
}

</style>

</head>

<body>

<h2>Employee List</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Department</th>
<th>Salary</th>
<th>Joining Date</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['salary']; ?></td>

<td><?php echo $row['joining_date']; ?></td>

<td>

<a class="btn edit"
href="edit_employee.php?id=<?php echo $row['id']; ?>">
Edit
</a>

<a class="btn delete"
href="delete_employee.php?id=<?php echo $row['id']; ?>">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>
