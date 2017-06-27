
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

$conn= new mysqli("localhost","root","","db1");


if($conn->connect_error)
{
    echo "connection error";
}
$result=$conn->query("select * from news_tbl ");

?>
<table class="table">
  <thead>           
  <th >news_id </th>
    <th >title </th>
      <th> Descition </th>
        <th> date </th>
        <th> delete </th>
        
        </thead>
<?php 

while($row=$result->fetch_assoc())
{
 
 echo "<tr>";
echo "<td>".$row["news_id"]."</td>";
echo "<td>".$row["news_title"]."</td>";
echo "<td>".$row["news_desc"]."</td>";
echo "<td>".$row["news_date"]."</td>";
echo '<td> <a href="update.php?id='.$row["news_id"].'"><span class="glyphicon glyphicon-trash"></span>|<a href="update.php?id='.$row["news_id"].'"><span class="glyphicon glyphicon-pencil"></span> </td>';
}
?>
</table>
</body>
</html>