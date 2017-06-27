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


?>

<table class="table">
<thead>
<th>News ID</th>
<th>News Title</th>
<th>News Desc</th>
<th>News Date</th>
<th>Action</th>
</thead>
<?php
require 'db.php';
$obj=new database();

$res=$obj->getAllData();

while($row=$res->fetch_assoc()){
echo ' <tr>';
echo '<td>' . $row["news_id"] . '</td>';
echo '<td>' . $row["news_title"] . '</td>';
echo '<td>' . $row["news_desc"] . '</td>';
echo '<td>' . $row["news_date"] . '</td>';

 echo '<td><a href="delete.php?id='.$row["news_id"].'">Delete</a> | 
   <a href="update.php?id='.$row["news_id"].'">Update</a>
   </td>';
echo '</tr>';
}
?>
</table>
<form method="post" action="dbins.php">
<center>
<input type="submit" class="btn btn-info btn-lg" name="btnins" value="Insert New Record"/></tr>
</center>
</form>


</body>
</html>