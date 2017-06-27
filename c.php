<?php
session_start();
?>
<?php
$nameerrshow="hidden"; 
$nameerr=" ";
$name=" ";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
        if(empty($_POST["txtname"]))
        {
            $nameerrshow=" ";
            $nameerr="name required";
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



<div class="container">
<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

<div class="form-group">
<label>Name:</label>
<input type="text" class="form-control" name="txtname" placeholer="Enter Name">
</div>

<div <?php echo $nameerrshow; ?> class="alert alert-danger">
<?php echo $nameerr; ?>
</div>

<div class="form-group">
<input type="submit" class=" form-control btn btn-info" name="btn" value="submit"> 
</div>

</form>
</div>
</body>
</html>