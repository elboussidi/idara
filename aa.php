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
   echo 'تم الاتصال بنجاح  ';
 }
?>


<?php

$info= mysqli_insert_id($conect) ;
echo $info;

?>