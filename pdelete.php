<?php
$pid=$_GET["id"];
include 'db.php';
$obj=new pro;
$res=$obj->delPro($pid);
if($res===true)
{
    header('location:product.php');
}
else
{
    echo "unsuccessful";
}
?>