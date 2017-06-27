<?php
session_start();
?>
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

$pid=$_SESSION["user"];
echo $pid;
$cnn=new mysqli("localhost","root","","db1");
$sql="select * from user_tbl where email='".$pid."'";

$result=$cnn->query($sql);
if($result==true)
{echo 'hi';
$row=$result->fetch_assoc();
echo 'hi';
$img=$row["img"];
echo $img;

}
?>
<form method="post" action="chngdp1.php?img=<?php echo $img; ?>" enctype="multipart/form-Data" >
<table class="table">
<h1><center>Change Profile Picture</center></h1>

<tr><td>User IMAGE:</td><td><input type="file" class="form-control" name="txtimg"></td></tr></br>
<tr><td><center><input type="submit" name="btnsub"  class="btn btn-info btn-lg" value="UPDATE"></center></td></tr>
</table>
</form>
</body>
</html>