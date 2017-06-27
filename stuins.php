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

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<table class="table">
<h1><center>Insert</center></h1>
<tr><td>Roll No:<td><input type="text" class="form-control" name="txtno"></tr><br>
<tr><td>Name:<td><input type="text" class="form-control" name="txtname"></tr><br>
<tr><td>Mobile No:<td><input type="text" class="form-control" name="txtmobile"></tr><br>
<tr><td>Fees:<td><input type="text" class="form-control" name="txtfees"></tr><br>
<tr><td>Gender:<td><input type="radio"  name="rdo1">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="radio"  name="rdo2">Female</tr>
<tr><td>Year:<td><input type="text" class="form-control" name="txtyear"></tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php
$_roll_no="";
$_name="";
$_mobile_no="";
$_fees="";
$_gender="";
$_year="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_roll_no=$_POST["txtno"];
    $_name=$_POST["txtname"];
    $_mobile_no=$_POST["txtmobile"];
    $_fees=$_POST["txtfees"];
    $_gender=$_POST["rdo1"];
    $_year=$_POST["txtyear"];
    $cnn=new mysqli("localhost","root","","db1");
    $sql="insert into student_tbl values('". $_roll_no ."','". $_name ."','". $_mobile_no ."','". $_fees ."','". $_gender ."','". $_year ."')";
    if($cnn->query($sql)===true)
    {
         header('location:student.php');
    }
    else
    {
        echo " Not Successfully Insert";
    }

}
?>
</body>
</html>