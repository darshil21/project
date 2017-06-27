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
    require 'navbar.php';
    require 'database.php';
    $obj=new databaseuserlogin();
    if(isset($_POST["btnfor"]))
    {
        $obj1=new databaseuserfor();
        $res=$obj1->getuser($_POST["txtfor"]);
        if($res->num_rows==1)
        {
            $row=$res->fetch_assoc();
            $_SESSION["foremail"]=$_POST["txtfor"];
            $_SESSION["forpass"]=$row["upassword"];
            header('location:emaildemo.php');
        }
        else
        {
            echo '<script>';
            echo 'alert("Enter Valid EMail")';
            echo '</script>';
        }
    }
    if(isset($_POST["btnsub"]))
    {
        $_SESSION["userid1"]=$_POST["txtid"];
    $_SESSION["userps1"]=$_POST["txtps"];
        $result=$obj->getuser();
        if($result->num_rows==1)
        { 
            $row=$result->fetch_assoc();
            if($row["verified"]=="yes")
            {
            $_SESSION["usid"]=$row["uid"];
            if($row["uid"]=="admin@gmail.com")
            {
                 header('location:product_disp.php');   
            }
            else
            {
                header('location:prod_display1.php');
            }
            }
            else
            {
                echo '<script>';
            echo 'alert("Plz Verify Email")';
            echo '</script>';
            }
        }
        else
        {
            echo '<script>';
            echo 'alert("Fail")';
            echo '</script>';
        }
    }
?>
<form method="post" action="user_login.php">
<div class="jumbotron">
    <center><h1><font color="">Login</font></h1></center>
</div>

<div>
    <div class="col-md-3">
    </div>
    <div class="col-md-5 form-group">
        <span class="glyphicon glyphicon-user"></span><input type="text" name="txtid" class="form-control" placeholder="Enter Email Id"><br>
        <span class="glyphicon glyphicon-lock"></span><input type="text" name="txtps" class="form-control" placeholder="Enter Password">
    </div>
</div>
<div class="row form-group">
    <div class="col-md-5">
        
    </div>
    <div class="col-md-1">
        <input type="submit" name="btnsub" value="Log In" class="btn btn-success">
    </div>
</div>
<div>
    <div class="col-md-3">
        
    </div>
     <div class="col-md-2">
        <!-- Button trigger modal -->
<a href="" data-toggle="modal" data-target="#myModal">
Forgot Passowrd</a>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Forgot Paaword</h4>
      </div>
      <div class="modal-body">
        <input type="text" name="txtfor" class="form-control" placeholder="Enter Useid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="btnfor" class="btn btn-primary">Send Password To Mail</button>
      </div>
    </div>
  </div>
</div>
    </div>
</div>
</form>
</body>
</html>