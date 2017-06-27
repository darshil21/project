

<?php
session_start();
$nameerrshow="hidden"; 
$nameerr=" ";
$name=" ";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
        if(empty($_POST["txtname"]))
        {
            $nameerrshow=" ";
            $nameerr="Field required";
        }
        else
        {
            if(!preg_match("/^[a-zA-Z]*$/",$_POST["txtname"]))
            {
                $nameerrshow=" ";
                $nameerr="only characters";
            }
            else
            {
                $name=$_POST["txtname"];
            $nameerrshow="hidden";
            $nameerr=" ";
           $_SESSION["username"]=$name;
           
            }
        }

         if(empty($_POST["txtno"]))
        {
            $nameerrshow=" ";
            $nameerrs="Field Required";
        }
        else
        {
            if(!preg_match("/^[0-9]*$/",$_POST["txtno"]))
            {
                $nameerrshow=" ";
                $nameerrs="only numbers";
            }
            else
            {
                $name=$_POST["txtno"];
            $nameerrshow="hidden";
            $nameerrs=" ";
           // $_SESSION["username"]=$name;
           
            }
        }
}
?>


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

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<div class="container">
<h1><nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
</button>-->
      <a class="glyphicon glyphicon-user" aria-hidden="true"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
        <li><a href="#">Sign In</a></li>

        
</nav>
</h1>
</div>
<div class="container">


<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Name:</span>
  <input type="text" name="txtname" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>

<br>
<div <?php echo $nameerrshow; ?> class="alert alert-danger">
<?php echo $nameerr; ?>
</div>
<br>

<div class="input-group">
 <span class="input-group-addon" id="basic-addon2">Email-Id:</span>
  <input type="email" name="txtid" class="form-control" placeholder="Recipient's userId" aria-describedby="basic-addon2"/>
 
</div>
<br><br>
<div class="input-group">
 <span class="input-group-addon" id="basic-addon2">Password:</span>
  <input type="password" name="txtpw" class="form-control" placeholder="Please enter your password." aria-describedby="basic-addon2" />
 </div>
 <br><br>
<div class="input-group">
 <span class="input-group-addon" id="basic-addon2">Mobile Number:</span>
  <input type="text" name="txtno" class="form-control" placeholder="Please enter your Mobele Number." aria-describedby="basic-addon2" />
</div>
 <br>
 <div <?php echo $nameerrshow; ?> class="alert alert-danger">
<?php echo $nameerrs; ?>
</div>
<br>
<div class="input-group">
 <span class="input-group-addon" id="basic-addon2">Address:</span>
  <textarea class="form-control" name="txtadd" placeholder="Your Address." aria-describedby="basic-addon2"></textarea>
</div><br>
</div>


    <br>
  <div class="container">
<div class="input-group">
<span class="input-group-addon" id="basic-addon2">Gender:</span>
    <!-- <span class="input-group-addon">-->
       &nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="radio" name="rdo1" aria-label="..." value="male">
     <!-- </span>--> &nbsp&nbsp&nbsp&nbsp&nbsp
      <label>Male</label>
      <!--<input type="text" class="form-control" aria-label="..." placeholder="This is my secure acount.">-->
    <!-- /input-group -->

     <input type="radio" name="rdo1" aria-label="..." value="female">
     <!-- </span>--> &nbsp&nbsp&nbsp&nbsp&nbsp
      <label>Female</label>
      <!--<input type="text" class="form-control" aria-label="..." placeholder="This is my secure acount.">-->
    </div><!-- /input-group -->
<br><br>

<div class="input-group">
 <span class="input-group-addon" id="basic-addon2">Image:</span>
  <input type="text" class="form-control" name="txtimg" placeholder="Your Image Path." aria-describedby="basic-addon2">
</div>
<br><br>
  </div>
<center> <input type="submit" class="btn btn-success" ></button></center>


</div>




</div>
</form>
</body>
<?php

$name="";
$email="";
$pw="";
$mob="";
$add="";
$gen="";
$img="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $t=md5(rand());
  $token=substr($t,0,6);
  $_SESSION["token"]=$token;
 
  $name=$_POST["txtname"];
  $email=$_POST["txtid"];
  $pw=$_POST["txtpw"];
  $mob=$_POST["txtno"];
  $add=$_POST["txtadd"];
  $gen=$_POST["rdo1"];
  $img=$_POST["txtimg"];
   $cnn=new mysqli("localhost","root","","db1");
   $sql="insert into user_tbl values('". $name ."','". $email ."','". $pw ."','". $mob ."','". $add ."','". $gen ."','". $img ."','no','".$token."')";
   if($cnn->query($sql)===true)
   {
     header("location:emailverify.php");
   }
   else
   {
     echo $sql;
     echo "Not successfully Sign up";
   }
}
?>
</html>