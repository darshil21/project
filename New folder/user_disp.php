
<html> 
<head>
    <script src="js/jquery-3.2.1.min.js"></script>
 <link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
    
</head>
<body class="container">
<?php
    require 'database.php';
    require 'navbar.php';
    $obj=new databaseuser();
    $result=$obj->getuser();
    $row=$result->fetch_assoc();
    if(isset($_POST["btnup"]))
    {
        header('location:user_edit.php');
    }
    if(isset($_POST["btnout"]))
    {
        unset($_SESSION['usid']);
        session_destroy();
        $_SESSION=" ";
        header('location:prod_display1.php');
        exit;
    }
    if(isset($_POST["btnch"]))
    {
        $v1=$_SESSION["usid"];
        $_SESSION["userid1"]=$v1;
        $_SESSION["userps1"]=$_POST["txtold"];
        $o1=new databaseuserlogin();
        $res=$o1->getuser();
        $newps=$_POST["txtnew"];
        $cfps=$_POST["txtnewch"];
        if($newps==$cfps)
        {
            if($res->num_rows==1)
            {
                $_SESSION["userps1"]=$newps;
                $o2=new databaseuserch();
                $res1=$o2->getuser();
                header('location:user_disp.php');
            }
        }
        else
        {
            echo '<script>';
            echo 'alert("Enter Correct Confirm Password")';
            echo '</script>';
        }
    }
?>
<form method="post" action="user_disp.php">
<div class="jumbotron">
    <h1><center>View Profile</center></h1>
</div>
<div class="row">
    <div class="col-md-5">
        <img src="<?php echo $row['uimg'];?>"  class="img-responsive img-circle" alt="">
    </div>
    <div class="col-md-7">
        <label>Id:<?php  echo $row["uid"] ?></label><br><br>
        <label>Uname:<?php  echo $row["uname"] ?></label><br><br>
        <label>Mobile:<?php  echo $row["umobileno"] ?></label><br><br>
        <label>Address:<?php  echo $row["uaddress"] ?></label><br><br>
        <label>Gender:<?php  echo $row["ugender"] ?></label><br><br>
        <input type="submit" name="btnup" value="Edit Profile" class="btn btn-success">
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-danger" data-toggle="modal" data-target="#myModal">Change Password</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control"  name="txtold" placeholder="Enter Old Password">
        <input type="text" class="form-control" name="txtnew" placeholder="Enter New Password">
        <input type="text" class="form-control" name="txtnewch" placeholder="Change password">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="btnch" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        <input type="submit" name="btnout" value="Log Out" class="btn btn-warning">
    </div>
</div>
</form>
</html>