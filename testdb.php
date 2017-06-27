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
$result=$cnn->query("select * from news_tbl");
?>

<table class="table">
<thead>
<th>News ID</th>
<th>News Title</th>
<th>News Desc</th>
<th>News Date</th>
</thead>
<?php
while($row=$result->fetch_assoc()){
echo ' <tr>';
echo '<td>' . $row["news_id"] . '</td>';
echo '<td>' . $row["news_title"] . '</td>';
echo '<td>' . $row["news_desc"] . '</td>';
echo '<td>' .$row["news_date"]. '</td>';
echo '</tr>';
}
?>
</table>
</body>
</html>