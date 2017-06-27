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
$id=$_GET["id"];
$cnn=new mysqli("localhost","root","","db1");
$sql="delete from student_tbl where roll_no=".$id;
if($cnn->query($sql)===true)
{
  header("location:stu.php");
    echo $id;
}


?>
</body>
</html>