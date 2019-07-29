<?php require 'config.php';  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>تحديث</title>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body dir="rtl">
                    <ul class="nav nav-tabs">
  <li class="nav-item">
      <a class="nav-link" href="index.php">اضافة</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="show.php">عرض</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="suivi.php">تتبع</a>
  </li>
   <li class="nav-item">
      <a class="nav-link active" href="">تحديث</a>
  </li>
 
</ul>
    
    <center><br><br>
      <div class="alert alert-info" role="alert">
  UPDATE info
</div> 
       
       <br><br>
       <form method="POST" style="width: 50%;" >
               
    <?php  
    if(isset($_GET['id'])){
    $id2=$_GET['id'] ;

 
$reed2="SELECT * FROM `info` WHERE `id`=$id2 ";
$reedqr2= mysqli_query($conect, $reed2);
if(!$reedqr2){
    die("تعدر الوصول الي المقالات");
    
} else {   
//    echo ' <div class="post">';
 while ($row2 = mysqli_fetch_assoc($reedqr2)) {
       $id=$row2['id'];
    $name=$row2['name'];
    $status=$row2['status'];
  

   
    echo "
           
           
       الاسم <br>
       <input type='ext' name='name' value='$name' placeholder='$name' style=' width: 50%; '><br><br>
       
  
<div class='input-group mb-3'>
  <div class='input-group-prepend'>
    <span class='input-group-text' id='inputGroup-sizing-default'>حالة الطلب</span>
  </div>
    <select class='custom-select' id='inputGroupSelect01' name='status'>
    <option selected>في الاستقبال</option>
    <option >تجهيز</option>
    <option >في مكتب تحرير</option>
    <option >تتم معالة الطلب</option>
    <option >جاهز للتسليم</option>
   
  </select>
</div>
<br>
رمز التحقق : 
  <input type='password' name='pass' >
      <br><bR>
         <input type='submit' name='updat' value='enregestre' class='btn btn-primary'>
      

     ";   
 }} }
      if(isset($_POST['updat'])){
  $name=$_POST['name'] ;
   $status=$_POST['status'] ;
   $pass=$_POST['pass'] ;
     $password="chichaoua";
   if($password == $pass){
   $up=" UPDATE `info` SET 
          `name`='$name',
           `status`='$status'   WHERE `id`=$id2  ";
    if(mysqli_query($conect, $up))    {   
        header("location:show.php") ;
    } else {
        echo 'noo up';  
    }
       
     
  }else {
      echo $pass;
    echo '  <div class="alert alert-danger" role="alert">
    رمز التحقق غير صحيح
</div>';
}
 



} 
     
    ?>
 
    </form> </div>
        </body>
</html>
