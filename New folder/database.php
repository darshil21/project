
<?php

class databasenews
{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','testdb');
        return self::$conn;
    }

    public static function disconnect(){
        mysqli_close(self::$conn);
        self::$conn=null;
    }

    public function getallnews()
    {
        $conn=databasenews::connect();
        $sql="select * from news_tbl";
        $res=$conn->query($sql);
        return $res;
        databasenews::disconnect();
    }
}

class databaseuserlogin
{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','testdb');
        return self::$conn;
    }

    public static function disconnect(){
        mysqli_close(self::$conn);
        self::$conn=null;
    }

    public function getuser()
    {
        $conn=databaseuserlogin::connect();
        $id=$_SESSION["userid1"];
        $ps=$_SESSION["userps1"];
        $sql="select * from user_tbl where uid='".$id."' and upassword='".$ps."'";
        $res=$conn->query($sql);
        return $res;
        databaseuserlogin::disconnect();
    }
}



class databaseuser
{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','testdb');
        return self::$conn;
    }

    public static function disconnect(){
        mysqli_close(self::$conn);
        self::$conn=null;
    }

    public function getuser()
    {
        $conn=databaseuser::connect();
        $id=$_SESSION["usid"];
        $sql="select * from user_tbl where uid='".$id."'";
        $res=$conn->query($sql);
        return $res;
        databaseuser::disconnect();
    }
}



class databaseusersign
{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','testdb');
        return self::$conn;
    }

    public static function disconnect(){
        mysqli_close(self::$conn);
        self::$conn=null;
    }

    public function insuser()
    {
        $conn=databaseusersign::connect();
        //$id=$_SESSION["usid"];
        $rand_alpha=md5(rand());
        $token=substr($rand_alpha,0,6);
        $targerdir="images/";
        $targetfile=$targerdir.basename($_FILES["img"]["name"]);
        move_uploaded_file($_FILES["img"]["tmp_name"],$targetfile);
        $sql="insert into user_tbl values('".$_POST["txtid"]."','".$_POST["txtun"]."','".$_POST["txtpass"]."','".$_POST["txtmob"]."','".$_POST["txtadd"]."','".$_POST["gender"]."','".$targetfile."','no','".$token."')";
        $res=$conn->query($sql);
        error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/class.phpmailer.php";
$e1=$_POST["txtid"];
$message="localhost/bootstrapdemo/emverify.php?tok='".$token."'&id='".$_POST["txtid"]."'";
// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 0;

// enable SMTP authentication
$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';

// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';

// set the SMTP port for the GMAIL server
$mail->Port = 465;

// your gmail address
$mail->Username = 'maildemo254@gmail.com';

// your password must be enclosed in single quotes
$mail->Password = 'maildemo1234';

// add a subject line
$mail->Subject = ' veri ';

// Sender email address and name
$mail->SetFrom('maildemo254@gmail.com', 'demo');

$email1=$e1;
// reciever address, person you want to send
$mail->AddAddress($email1);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

// add message body
$mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

try {
    // send mail
	
	//don't forget to enable openssl true from php_extensions
    $mail->Send();
    $msg = "Mail send successfully";
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}

        return $res;
        databaseusersign::disconnect();
    }
}




class databaseprod
{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','testdb');
        return self::$conn;
    }

    public static function disconnect(){
        mysqli_close(self::$conn);
        self::$conn=null;
    }

    public function getprod()
    {
        $conn=databaseprod::connect();
        
        if(isset($_SESSION["prodname"]))
        {
            $prodname=$_SESSION["prodname"];
        if($prodname=="all")
        {
            $sql="select * from product_tbl p,cat_tbl c where p.fk_cat_id=c.cat_id";
        }
        else
        {
$sql="select * from product_tbl p,cat_tbl c where p.fk_cat_id=c.cat_id and c.cat_name='".$prodname."'";
        }
        }
        else
        {
            $sql="select * from product_tbl p,cat_tbl c where p.fk_cat_id=c.cat_id";
        }
        $res=$conn->query($sql);
        return $res;
        databaseprod::disconnect();
    }
}



class databaseuserch
{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','testdb');
        return self::$conn;
    }

    public static function disconnect(){
        mysqli_close(self::$conn);
        self::$conn=null;
    }

    public function getuser()
    {
        $conn=databaseuserch::connect();
        $id=$_SESSION["userid1"];
        $ps=$_SESSION["userps1"];
        $sql="update user_tbl set upassword='".$ps."' where uid='".$id."'";
        $res=$conn->query($sql);
        return $res;
        databaseuserch::disconnect();
    }
}



class databaseuserfor
{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','testdb');
        return self::$conn;
    }

    public static function disconnect(){
        mysqli_close(self::$conn);
        self::$conn=null;
    }

    public function getuser($id)
    {
        $conn=databaseuserfor::connect();
        $sql="select * from user_tbl where uid='".$id."'";
        $res=$conn->query($sql);
        return $res;
        databaseuserfor::disconnect();
    }
}


?>