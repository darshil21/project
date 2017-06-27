<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.2.1.min"></script>

<link rel="stylesheet" href="css/bootstrap.min">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min"></script>

</head>
<body>
<?php
$cnn=new mysqli("localhost","root","","db1");
$result=$cnn->query("select * from student_tbl");
?>
<table class="table">
<thead>
<th>Roll No</th>
<th>Name</th>
<th>Mobile Number</th>
<th>Fees</th>
<th>Gender</th>
<th>Year</th>
<th>Edit and Delete</th>
</thead>
<?php
while($row=$result->fetch_assoc())
{
    echo '<tr>';
    echo '<td>'.$row["roll_no"].'</td>';
    echo '<td>'.$row["name"].'</td>';
    echo '<td>'.$row["mobile_no"].'</td>';
    echo '<td>'.$row["fees"].'</td>';
    echo '<td>'.$row["gender"].'</td>';
    echo '<td>'.$row["year"].'</td>';
    echo '<td><a href="stuedit.php?id='.$row["roll_no"].'"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp&nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp&nbsp
    <a href="studlt.php?id='.$row["roll_no"].'"><span class="glyphicon glyphicon-trash"></span></a></td>';
    echo '</tr>';
}
?>
</table>
<form action="stuins.php" method="post">
<center>
<input type="submit" class="btn btn-info" name="btnins" value="Insert New Record"/></tr>
</center>
</form>
</body>
</html>