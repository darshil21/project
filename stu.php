<html>
<head>

<script src="js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="styleshsheet" href="css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script>

</head>
<body>
<?php
$cnn=new mysqli("localhost","root","","db1");
$result=$cnn->query("select * from student_tbl");
?>
<table class="table table-striped table-hover">
<thead>
<th>rOll nO</th>
<th>NAME</th>
<th>mObile nO</th>
<th>FEES</th>
<th>GENDER</th>
<th>YEAR</th>
<th>ACTION</th>
</thead>
<?php
while($row=$result->fetch_assoc())
{
    echo '<tr>';
    echo '<td>' . $row["roll_no"] . '</td>';
    echo '<td>' . $row["name"] . '</td>';
    echo '<td>' . $row["mobile_no"] . '</td>';
    echo '<td>' . $row["fees"] . '</td>';
    echo '<td>' . $row["gender"] . '</td>';
    echo '<td>' . $row["year"] . '</td>';
    echo '<td><a href="supdate.php?id='.$row["roll_no"].'"><span class="glyphicon glyphicon-pencil"></span> | <a href="sdelete.php?id='.$row["roll_no"].'"><span class="glyphicon glyphicon-remove"> </td>';
    echo '</tr>';
}
?>
</table>
<form method="post" action="sinsert.php">
<center>
<input type="submit" class="btn btn-info btn-lg" name="btnins" value="Insert New Record"/></tr>
</center>
</form>
</body>
</html>