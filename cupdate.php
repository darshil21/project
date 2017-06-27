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
$cid="";
$cname="";
$cid=$_GET["id"];
$cnn=new mysqli("localhost","root","","db1");
$sql="select * from cat_tbl where cat_id=".$cid;
$result=$cnn->query($sql);
$row=$result->fetch_assoc();
$cname=$row["cat_name"];
?>
<form method="post" action="cupdate1.php" >
<table class="table">
<h1><center>UPDATE</center></h1>
<tr><td>Category ID:</td><td><input type="text" class="form-control" name="txtid" value="<?php echo $cid; ?>"></td></tr></br>
<tr><td>Category NAME:</td><td><input type="text" class="form-control" name="txtnm" value="<?php echo $cname; ?>"></td></tr></br>
<tr><td><center><input type="submit" name="btnsub"  class="btn btn-info btn-lg" value="UPDATE"></center></td></tr>
</table>
</form>
</body>
</html>