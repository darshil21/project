<?php
class database{
    public static $cnn=null;
    private static function connect(){
        self::$cnn=mysqli_connect('localhost','root','','db1');
        return self::$cnn;
    } 
    private static function disconnect(){
  return mysqli_close(self::$cnn);
        
    }
    public function getAllData()
    {
        $cnn=database::connect();
        $sql="select * from news_tbl";
        $res=$cnn->query($sql);
        return $res;
        databse::disconnect;
    }
    public function insertNews($news_id,$news_title,$news_desc,$news_date,$news_img)
    {
          $cnn=database::connect();
        $sql="insert into news_tbl values('".$news_id."','".$news_title."','".$news_desc."','".$news_date."','".$news_img."')";
        $res=$cnn->query($sql);
        return $res;
        database::disconnect;
    }
    public function delNews($news_id)
    {
         $cnn=database::connect();
        $sql="delete from news_tbl where news_id=".$news_id;
        $res=$cnn->query($sql);
        return $res;
        database::disconnect;
    }
    public function updtNews($newsid,$newstitle,$newsdesc,$newsdate)
    {
           $cnn=database::connect();    
        $sql="update  news_tbl set news_title='". $newstitle ."',news_desc='". $newsdesc ."',news_date='". $newsdate ."' where news_id=".$newsid."";
        $res=$cnn->query($sql);
        return $res;
        database::disconnect;          
    }
    
}
class cat
{
      public static $cnn=null;
    private static function connect(){
        self::$cnn=mysqli_connect('localhost','root','','db1');
        return self::$cnn;
    } 
    private static function disconnect(){
  return mysqli_close(self::$cnn);
        
    }
    public function getAllData()
    {
        $cnn=cat::connect();
        $sql="select * from cat_tbl";
        $res=$cnn->query($sql);
        return $res;
        databse::disconnect;
    }
    public function insertCat($cid,$cname)
    {
          $cnn=cat::connect();
        $sql="insert into cat_tbl values('".$cid."','".$cname."')";
        $res=$cnn->query($sql);
        return $res;
        cat::disconnect;
    }
    public function delCat($cid)
    {
         $cnn=cat::connect();
        $sql="delete from cat_tbl where cat_id=".$cid;
        $res=$cnn->query($sql);
        return $res;
        cat::disconnect;
    }
    public function updtCat($cid,$cname)
    {
           $cnn=cat::connect();    
        $sql="update cat_tbl set cat_name='".$cname."' where cat_id=".$cid;
        $res=$cnn->query($sql);
        return $res;
        cat::disconnect;          
    }
    
}
class pro
{
      public static $cnn=null;
    private static function connect(){
        self::$cnn=mysqli_connect('localhost','root','','db1');
        return self::$cnn;
    } 
    private static function disconnect(){
  return mysqli_close(self::$cnn);
        
    }
    public function getAllData()
    {
        $cnn=pro::connect();
        $sql="select * from product_tbl";
        $res=$cnn->query($sql);
        return $res;
        databse::disconnect;
    }
    public function insertPro($pname,$pclr,$price,$mfg,$wrnt,$soh,$img,$cat)
    {
          $cnn=pro::connect();
 $sql="insert into product_tbl (pname,pcolor,price,mfg,warranty,soh,img,fk_cat_id) values ('".$pname."','".$pclr."','".$price."','".$mfg."','".$wrnt."','".$soh."','".$img."','".$cat."')";        $res=$cnn->query($sql);
        return $res;
        pro::disconnect;
    }
    public function delPro($pid)
    {
         $cnn=pro::connect();
        $sql="delete from product_tbl where pid=".$pid;
        $res=$cnn->query($sql);
        return $res;
        pro::disconnect;
    }
    public function updtPro($pid,$pname,$pclr,$price,$mfg,$wrnt,$soh,$img)
    {
           $cnn=pro::connect();    
       $sql="update product_tbl set pid='".$pid."',pname='".$pname."',pcolor='".$pclr."',price='".$price."',mfg='".$mfg."',warranty='".$wrnt."',soh='".$soh."',img='".$img."' where pid=".$pid."";
        $res=$cnn->query($sql);
        return $res;
        pro::disconnect;          
    }
    
}
class usr
{
      public static $cnn=null;
    private static function connect(){
        self::$cnn=mysqli_connect('localhost','root','','db1');
        return self::$cnn;
    } 
    private static function disconnect(){
  return mysqli_close(self::$cnn);
        
    }
    public function getAllData()
    {
        $cnn=usr::connect();
        $sql="select * from usr_tbl";
        $res=$cnn->query($sql);
        return $res;
        databse::disconnect;
    }
    public function insertusr($cid,$cname)
    {
          $cnn=usr::connect();
        $sql="insert into usr_tbl values('".$cid."','".$cname."')";
        $res=$cnn->query($sql);
        return $res;
        usr::disconnect;
    }
    public function delusr($cid)
    {
         $cnn=usr::connect();
        $sql="delete from usr_tbl where usr_id=".$cid;
        $res=$cnn->query($sql);
        return $res;
        usr::disconnect;
    }
    public function updtusr($cid,$cname)
    {
           $cnn=usr::connect();    
        $sql="update usr_tbl set usr_name='".$cname."' where usr_id=".$cid;
        $res=$cnn->query($sql);
        return $res;
        usr::disconnect;          
    }
    
}

?>
