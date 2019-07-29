<?php require 'config.php';  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>add info</title>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body dir="rtl">
        <ul class="nav nav-tabs">
  <li class="nav-item">
      <a class="nav-link active" href="index.php">اضافة</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="show.php">عرض</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="suivi.php">تتبع</a>
  </li>
 
</ul>
        <?php
        if(isset($_POST['su'])){
            
        }
        
        
    if(isset($_POST['submit'])){
 

    $name = mysqli_real_escape_string($conect, $_POST['name']);
      $status= mysqli_real_escape_string($conect, $_POST['status']);
       $email=$_POST['email'];
  if(empty($name)){
      echo '
 <script>
    alert("لا يمكن ترك حقل الاسم فارغ") ;
    </script>
';
  } else {
    
   $aadmin="INSERT INTO `info` (`id`, `name`, `status`, `date`, `email`) VALUES (NULL, '$name', '$status', CURRENT_TIMESTAMP,  '$email')";
   $qty=mysqli_query($conect, $aadmin);
   
   if($qty){
     //  header("location:lsadmin.php");
       $last_id = $conect->insert_id;
      echo ' <div class="alert alert-success">  تم اضافة البيانات بنجاح   جاري تحويل لصفحة الطلبات</div>';
    echo '<meta http-equiv="refresh" content="2; \'show.php?m='.$last_id.'&mm='.$email.' \'  /> " ';

    } else {
        die(mysqli_error($conect)) ;   
    }
    }   }
    
    ?>
    
      
    <center><br><br>
       <div class="alert alert-primary" role="alert">
           <h1>  ajoute info</h1>
</div>
  <br><br><br>
  <form method="POST"  style="width: 50%;" action="">
           
        
  <div class="row">
    <div class="col"><br> 
      الاسم <br>  <input type="text" name="name" class="form-control" placeholder="name">
    </div>
    <div class="col"><br> 
    البريدالالكتروني <br>    <input type="email" name="email" class="form-control" placeholder="email">
    </div>
  </div>
<br><br>
       
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">حالة الطلب</span>
  </div>
    <select class="custom-select" id="inputGroupSelect01" name="status">
    <option selected>في الاستقبال</option>
    <option >تجهيز</option>
    <option >في مكتب تحرير</option>
    <option >تتم معالة الطلب</option>
    <option >جاهز للتسليم</option>
   
  </select>
</div> رمز التحقق <br>
<input type="text" name="pass" style=" width: 50%; "><br><br>
<br>
      
         <input type="submit" name="submit" value="حفض الطلب" class="btn btn-primary">
          <input type="submit" name="su" value="حفض الطلب" class="btn btn-danger">
       </form>
    </center>    
    <script type="text/javascript" src="js/bootstrap.min.js" >
    </body>
</html>
