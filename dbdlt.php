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
$sql="select * from news_tbl";
$result=$cnn->query($sql);
?>
<table class="table">
<thead>
<th>Id</th>
<th>title</th>
<th>desc</th>
<th>date</th>
<th>Delete</th>
</thead>
<?php
while($row=$result->fetch_assoc())
{
    echo '<tr>';
    echo '<td>'. $row["news_id"] .'</td>';
    echo '<td>'. $row["news_title"] .'</td>';
   echo '<td>'. $row["news_desc"] .'</td>';
   echo '<td>'. $row["news_date"] .'</td>';
   echo '<td><a href="delete.php?id='.$row["news_id"].'">Delete</a> | 
   <a href="delete.php?id='.$row["news_id"].'">Update</a>
   </td>';
   echo '</tr>';
}
?>
</table>

</body>
</html>