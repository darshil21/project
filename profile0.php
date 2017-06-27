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
<?php 
$uname=$_SESSION["user"];
$cnn=new mysqli("localhost","root","","db1");
$sql="select * from user_tbl where email='".$uname."'";
$result=$cnn->query($sql);
$row=$result->fetch_assoc();

?>

<form method="post" action="profile.php">
<?php
  echo '<div class="col-sm-6 col-md-4">';
        echo '<div class="thumbnail">';
        echo '<img src='.$row["img"].' height="200px" width="200px">';
        echo '<div class="caption">';
        echo '<h1>'.'WelCome , '.'<u>'.$row["name"].'</u>'.'</h1>';
        echo '<h3>'.'Email ID : '.$row["email"].'</h3>';
        echo '<h3>'.'Mobile NO : '.$row["mobileno"].'</h3>';
        echo '<h3>'.'Address : '.$row["address"].'</h3>';
        echo '<h3>'.'Gender : '.$row["gender"].'</h3>';

  
  
   echo  ' <button type="submit" class="btn btn-lg btn-info" >EDIT PROFILE</button> | <a href="produsr.php" type="button"  button" class="btn btn-lg btn-info" >Back To Home</a>';
     
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
?>

</form>
</body>
</html>