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
<input type="text" name="txtid">
<input type="text" name="txttitle">
<input type="text" name="txtname">
<input type="text" name="txtimg">
<input type="text" name="txtdt">

</form>
<?php

$cnn=new mysqli("localhost","root","","db1");
$sql="insert into news_tbl values("..","'..'","'..'","'..'","..")";


   


?>


</table>

</body>
</html>