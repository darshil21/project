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
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<input type="text" name="txtid" />
<input type="text" name="txttitle" />
<input type="text" name="txtdesc" />
<input type="text" name="txtdate" />
<input type="text" name="txtimg" />
<input type="submit" name="btnins" value="Insert" />
</form>
<?php
$_news_id="";
$_news_title="";
$_news_desc="";
$_news_img="";
$_news_date="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$_news_id=$_POST["txtid"];
$_news_title=$_POST["txttitle"];
$_news_desc=$_POST["txtdesc"];
$_news_img=$_POST["txtimg"];
$_news_date=$_POST["txtdate"];
include 'db.php';
$obj=new database;
$res=$obj->insertNews($_news_id,$_news_title,$_news_desc,$_news_date,$_news_img);
   if($res===true)
   {
       echo "Successful";
       header('location:dbselect.php');
       
   }
   else
   {
    //   echo "insert into news_tbl values(". $_newsid. ",'". $_newstitle ."','".  $_newsdesc ."',".  $_newsdate .",'". $_newsimg ."')";
    echo "insert into news_tbl values('". $_news_id. "','". $_news_title ."','".  $_news_desc ."','".  $_news_date ."','". $_news_img ."')";

       echo "Not Successful";
   }

}
?>
</body>
</html>