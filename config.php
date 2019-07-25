<?php
$localhost="localhost";
$username="root";
$password="";
$database="script";
$conect=mysqli_connect($localhost,$username,$password,$database);

if(!$conect){
    die("عذرا لم يتم الاتصال بقاعدة البيانات");
}
 else {
  // echo 'تم الاتصال بنجاح  ';
 }
?>
<?php

$ssql="CREATE TABLE `info` ( `id` INT(58) NOT NULL AUTO_INCREMENT , `name` VARCHAR(80) NOT NULL , `status` VARCHAR(89) NOT NULL  , PRIMARY KEY (`id`)) ENGINE = InnoDB;" ;

if($conect->query($ssql)=== TRUE) {
    echo 'تم انشاء جدول بنجاح';
}

?>