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

<form method="post" action="stuedit1.php">
<table class="table">
<h1><center>Edit Your Data</center></h1>
<tr><td>Roll No:<td><input type="text" class="form-control" name="txtno"></tr><br>
<tr><td>Name:<td><input type="text" class="form-control" name="txtname"></tr><br>
<tr><td>Mobile No:<td><input type="text" class="form-control" name="txtmobile"></tr><br>
<tr><td>Fees:<td><input type="text" class="form-control" name="txtfees"></tr><br>
<tr><td>Gender:<td><input type="radio"  name="rdo1">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="radio"  name="rdo1">Female</tr>
<tr><td>Year:<td><input type="text" class="form-control" name="txtyear"></tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnedt" value="Edit"></center>
</form>

<?php
$_roll_no="";
$_name="";
$_mobile_no="";
$_fees="";
$_gender="";
$_year="";
$_roll_no=$_GET["id"];
$cnn=new mysqli("localhost","root","","db1");
$sql="select * from student_tbl where roll_no=" . $_roll_no;
$result=$cnn->query($sql);
$row=$result->fetch_assoc();
$_roll_no=$row["roll_no"];
$_name=$row["name"];
$_mobile_no=$row["mobile_no"];
$_fees=$row["fees"];
$_gender=$row["gender"];
$_year=$row["year"];
?>

</body>
</html>