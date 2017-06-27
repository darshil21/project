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
$pid="";
$pname="";
$pclr="";
$price="";
$mfg="";
$wrnt="";
$soh="";
$img="";
$pid=$_GET["id"];

$cnn=new mysqli("localhost","root","","db1");
$sql="select * from product_tbl where pid=".$pid;
$result=$cnn->query($sql);
$row=$result->fetch_assoc();
$pname=$row["pname"];
$pclr=$row["pcolor"];
$price=$row["price"];
$mfg=$row["mfg"];
$wrnt=$row["warranty"];
$soh=$row["soh"];
$img=$row["img"];

?>
<form method="post" action="pupdate1.php?img=<?php echo $img; ?>" enctype="multipart/form-Data" >
<table class="table">
<h1><center>UPDATE</center></h1>
<tr><td>Product ID:</td><td><input type="text" class="form-control" name="txtid" value="<?php echo $pid; ?>"></td></tr></br>
<tr><td>Product NAME:</td><td><input type="text" class="form-control" name="txtnm" value="<?php echo $pname; ?>"></td></tr></br>
<tr><td>Product COLOR:</td><td><input type="text" class="form-control" name="txtclr" value="<?php echo $pclr; ?>"></td></tr></br>
<tr><td>PRICE:</td><td><input type="text" class="form-control" name="txtprice" value="<?php echo $price; ?>"></td></tr></br>
<tr><td>MANUFACTURER:</td><td><input type="text" class="form-control" name="txtmfg" value="<?php echo $mfg; ?>"></td></tr></br>
<tr><td>WARRANTY:</td><td><input type="text" class="form-control" name="txtwar" value="<?php echo $wrnt; ?>"></td></tr></br>
<tr><td>SOH:</td><td><input type="text" class="form-control" name="txtsoh" value="<?php echo $soh; ?>"></td></tr></br>
<tr><td>Product IMAGE:</td><td><input type="file" class="form-control" name="txtimg" ></td></tr></br>
<tr><td><center><input type="submit" name="btnsub"  class="btn btn-info btn-lg" value="UPDATE"></center></td></tr>
</table>
</form>
</body>
</html>