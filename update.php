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

$newsid="";
$newstitle="";
$newsdesc="";
$newsdate="";
$newsimg="";

$newsid=$_GET["id"];












 ?>
<body>
<?php 





$conn= new mysqli("localhost","root","","db1");

$sql="select * from news_tbl where news_id=".$newsid;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$newstitle=$row["news_title"];
$newsdesc=$row["news_desc"];
$newsdate=$row["news_date"];




?>
<form method="post" action="update1.php" >

<input type="text" name="txtid" value="<?php echo $newsid; ?>">
<input type="text" name="txttitle" value="<?php echo $newstitle; ?>">
<input type="text" name="txtdesc" value="<?php echo $newsdesc; ?>">
<input type="text" name="txtdate" value="<?php echo $newsdate; ?>">
<input type="submit" name="btnsub" value="update">



</form>
</body>
</html>