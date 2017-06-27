<?php 


if($_SERVER["REQUEST_METHOD"]=="POST")
{


$newsid=$_POST["txtid"];
$newstitle=$_POST["txttitle"];
$newsdesc=$_POST["txtdesc"];
$newsdate=$_POST["txtdate"];



require 'db.php';
$obj=new database;
$res=$obj->updtNews($newsid,$newstitle,$newsdesc,$newsdate);
if($res===true)
{
   header('location:dbselect.php');
}
else
{ 
  
    echo "unsuccesfull";
}

















}
?>
