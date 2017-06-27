<html>
<head>

<script src="js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="styleshsheet" href="css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script>






</head>
<?php

$rollno="";
$name="";
$mobileno="";
$fees="";
$gender="";
$yr="";
$rollno=$_GET["id"];












 ?>
<body>
<?php 





$conn= new mysqli("localhost","root","","db1");

$sql="select * from student_tbl where roll_no=".$rollno;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$name=$row["name"];
$mobileno=$row["mobile_no"];
$fees=$row["fees"];
$gender=$row["gender"];
$yr=$row["year"];

//<input type="text" name="txtyr"  class="form-control"value="<?php echo $yr; ?>">


?>
<form method="post" action="supdate1.php" >
<table class="table">
<h1><center>UPDATE</center></h1>

<tr><td>Roll No:</td><td><input type="text" name="txtid" class="form-control" value="<?php echo $rollno; ?>"></tr><br>
<tr><td>Name:</td><td><input type="text" name="txtname" class="form-control" value="<?php echo $name; ?>"></tr><br>
<tr><td>Mobile No:</td><td><input type="text" name="txtmn" class="form-control" value="<?php echo $mobileno; ?>"></tr><br>
<tr><td>Fees:</td><td><input type="text" name="txtfees"  class="form-control" value="<?php echo $fees; ?>"></tr><br>
<tr><td>Gender:</td><td><input type="radio" name="txtgender" <?php if($gender=="male") echo"checked";?> value="male"."<?php echo $gender; ?>">male &nbsp&nbsp&nbsp&nbsp&nbsp <input type="radio" name="txtgender" <?php if($gender=="female") echo"checked";?> value="female"."<?php echo $gender; ?>">female</tr><br>
<tr><td>Year:</td><td><select name="txtyr">
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>

    </select></td></tr><br>


<tr><td><center><input type="submit" name="btnsub"  class="btn btn-info btn-lg" value="UPDATE"></center></td></tr>

</table>

</form>
</body>
</html>