<?php
$id=$_GET["id"];
include 'db.php';
$obj=new database;
$res=$obj->delNews($id);
if($res===true)
{
    header("location:dbselect.php");
}
?>