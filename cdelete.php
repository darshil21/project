<?php
$cid=$_GET["id"];
include 'db.php';
   $obj=new cat;
   $res=$obj->delCat($cid);
if($res===true)
{
    header('location:cat.php');
}
else
{
    echo "unsuccessful";
}
?>