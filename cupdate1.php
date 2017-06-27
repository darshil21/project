<?php 


if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
    $cid=$_POST["txtid"];
    $cname=$_POST["txtnm"];
  include 'db.php';  
  $obj=new cat;
  $res=$obj->updtCat($cid,$cname);
if($res===true)
{
   header('location:cat.php');
}
else
{ 
  
    echo "unsuccesfull";
}
}