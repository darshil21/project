
<?php
session_start();
?>
<html>
<head>

<script src="js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="styleshsheet" href="css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script>

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="produsr.php"><span class="glyphicon glyphicon-home"></span></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="produsr.php">Items <span class="sr-only">(current)</span></a></li>
        <li><a href="#"></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profile <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="profile0.php">Your Profile</a></li>
            <li><a href="profile.php"> Edit Profile</a></li>
            <li><a href="pswd.php">Change Password</a></li>
            <li class="divider"></li>
            <li><a href="login.php">Log Out</a></li>
            <li class="divider"></li>
            <li><a href="#"></a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search Items Here">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<form action="pswd.php" method="post">
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
      <a class="glyphicon glyphicon-lock" aria-hidden="true"></a>
    </div>
     
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
        <li><a href="#">Change PassWord</a></li>

        
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
 <span class="input-group-addon" id="basic-addon2">Current Password:</span>
  <input type="password" name="txtpw" class="form-control" placeholder="Recipient's Old Password" aria-describedby="basic-addon2">
 
</div>
<br>
<div class="input-group">
 <span class="input-group-addon" id="basic-addon2">New Password:</span>
  <input type="password" name="txtpw1"class="form-control" placeholder="Please enter your new password." aria-describedby="basic-addon2">
 
</div>

    <br>
    <div class="input-group">
 <span class="input-group-addon" id="basic-addon2">Re-enter Password:</span>
  <input type="password" name="txtpw2"class="form-control" placeholder="Please enter your new password." aria-describedby="basic-addon2">
 
</div>
  
<!-- /input-group -->
<br>
  
<center> <button type="submit" class="btn btn-lg btn-success" >Confirm</button></center><br><br>

</center>
</div>




</div>
<br>
</div>
<br>


</form>
</body>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $email=$_SESSION["user"];
$pw1=$_POST["txtpw1"];
$pw2=$_POST["txtpw2"];
$pwd=$_SESSION["pw"];
$_SESSION["pw1"]=$pw1;
$pwd1=$_SESSION["pw1"];
$cnn=new mysqli("localhost","root","","db1");
//if($pw1==$pw2)
//{
$sql="select * from user_tbl where email='".$email."' and password='".$pwd."'";
if($cnn->query($sql)==true)
{
      $sql="update user_tbl set password='".$pwd1."' where email='".$email."'";
      if($cnn->query($sql)==true)
      {
        echo 'successful';
      }
      else
       {
        echo 'unsuccessful';
      }

}
/*echo $sql;
$result=$cnn->query($sql);
if($result->num_rows==1)
{ 
    header('location:pswd1.php');
}
 else
 {
     echo '<h1>';
  echo "Please Enter Correct Password";
  echo '</h1>';
 }
}

else
{
echo 'enter same password';
}*/
}
?>
</html>
