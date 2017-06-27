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
<tr><td>Gender:<td><input type="radio"  name="rdo1" value="male">Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="radio" value="female" name="rdo1">Female</tr>
<tr><td>Year:<td><select name="txtyear">
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>

    </select></tr><br></table>
     
<tr><center><input type ="submit" class="btn btn-info btn-lg" name="btnin" value="Insert"></center>
</form>

<?php
$roll_no="";
$name="";
$mobile_no="";
$fees="";
$gender="";
$year="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $roll_no=$_POST["txtno"];
    $name=$_POST["txtname"];
    $mobile_no=$_POST["txtmobile"];
    $fees=$_POST["txtfees"];
    $gender=$_POST["rdo1"];
    $year=$_POST["txtyear"];
    $cnn=new mysqli("localhost","root","","db1");
    $sql="insert into student_tbl values('". $roll_no ."','". $name ."','". $mobile_no ."','". $fees ."','". $gender ."','". $year ."')";
    if($cnn->query($sql)===true)
    {
         header('location:stu.php');
    }
    else
    {
        echo " Not Successfully Insert";
    }

}
?>
</body>
</html>