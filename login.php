<?php
session_start();
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

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-Data">
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
      <a class="glyphicon glyphicon-user" aria-hidden="true"></a>
    </div>
     
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
        <li><a href="#">Log In</a></li>

        
</nav>
</h1>
</div>
<div class="container">

<div class="col-md-9">

<!--<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Name:</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>-->
<br>
<div class="input-group">
 <span class="input-group-addon" id="basic-addon2">Email-Id:</span>
  <input type="email" name="txtid" class="form-control" placeholder="Recipient's userId" aria-describedby="basic-addon2">
 
</div>
<br>
<div class="input-group">
 <span class="input-group-addon" id="basic-addon2">Password:</span>
  <input type="password" name="txtpw"class="form-control" placeholder="Please enter your password." aria-describedby="basic-addon2">
 
</div>

    <br>
  
<!-- /input-group -->
<br>
  
<center> <button type="submit" class="btn btn-lg btn-success" >Log In</button></center><br><br>
<center><a href="forget.php" >Forget Password?</a>&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="signup.php" >Create New Account?</a>
</center>
</div>




</div>
<br>
</div>
<br>


</form>
</body>
<?php

$em=" ";
$pw=" ";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
  $em=$_POST["txtid"];
  $pw=$_POST["txtpw"];
  

  
 $cnn=new mysqli("localhost","root","","db1");
 $sql="select * from user_tbl where email='". $em ."' and password='". $pw ."' ";
$result=$cnn->query($sql);
if($result->num_rows==1)
{
$_SESSION["user"] = $em;
$_SESSION["pw"]=$pw;
$row=$result->fetch_assoc();

if($row["verify"]==="yes")
{
 header("location:product.php");
}
else
{
  echo "please verify your email address. we have sent you mail.";
  echo '<a href="emailverify.php">'.'Click here to verify'.'</a>';

}

}
else
{
 echo '<h1>';
  echo "Please enter valid email and password";
  echo '</h1>';
}
}
  
?>

</html>