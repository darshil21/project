<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_roll_no=$_POST["txtno"];
    $_name=$_POST["txtname"];
    $_mobile_no=$_POST["txtmobile"];
    $_fees=$_POST["txtfees"];
    //$_gender=$_POST["rdo1"];
    $_year=$_POST["txtyear"];
    $cnn=new mysqli("localhost","root","","db1");
    $sql="update student_tbl set name='".$_name."', mobile_no='".$_mobile_no."',fees='".$_fees."', year='". $_year."' where roll_no='".$_roll_no."'";
    if($cnn->query($sql)===true)
    {
         header('location:student.php');
    }
    else
    {
       // echo "update from student_tbl set name='". $_name ."', mobile_no= '". $_mobile_no ."', fees= '". $_fees ."', year= '". $_year ."' where  roll_no='". $_roll_no ."'";
        echo " Not Successfully Update";
    }

}
?>