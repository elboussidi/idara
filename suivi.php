
<?php require 'config.php';  ?>
<!DOCTYPE html>
<html>
<head>
	<title> suivi</title>
            <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" >
</head>
<body dir="rtl">
            <ul class="nav nav-tabs">
  <li class="nav-item">
      <a class="nav-link " href="index.php">اضافة</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="show.php">عرض</a>
  </li>
  <li class="nav-item">
      <a class="nav-link active" href="suivi.php">تتبع</a>
  </li>
 
</ul>
    

   <?php 
    if(isset($_POST['submit'])){ 
        $id=$_POST['id'] ;
        
       
    if($id==""){
          die(' <br><div class="no">لايمكن ترك حقل البحث فارغ</div>') ;
    }
      
    else { 
//   '%".$id."%'"
    $red="select * from info where id =  '$id'" ;
    $result= mysqli_query($conect, $red) ;
    if(!$result){
        die('<div class="no">تعدر الوصول الي البيانات</div>') ;
    }
     }  }
?>
  
    <br><br>
<center>
    <div class="alert alert-success"  role="alert">
 <h1 > تتبع الطلبات </h1>
 </div><br><br>
    <form method="post">
        <h5 class="font-weight-lighter">رقم التتبع</h5>  <input type="text" name="id" value="" class="input-group" style="width: 20%"/> <br> <br> 
        

         <input type="submit" class="btn btn-outline-success" value="suivi" name="submit" >
      
    </form>
   <?php 
   if(isset($_POST['submit'])){ 
       
        
    while ($row= mysqli_fetch_assoc($result)){
        
        
       $id=$row['id'];
       $name=$row['name'];
       $status=$row['status'];
      $date=$row['date'];
      $date_act=$row['date-act'];
      $not=$row['note'];
      
        echo " <br><br>
   <table class='table table-striped' style='width:90% ;'>
  <thead>
    <tr>
      <th scope='col'>رقم</th>
      <th scope='col'>صاحب الطلب</th>
      <th scope='col'>حالة الطلب</th>
      <th scope='col'>تاريخ التسجيل</th>
      <th scope='col'>اخر تحديث</th>
      <td>ملاحضات</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>$id</th>
      <td>$name</td>
      <td>$status</td>
      <td>$date</td>
      <td></td>
      <td>$not</td>
    </tr>
 
  </tbody>
</table>

    ";
   }
  
    }
   ?>  
</center>
</body>
</html>
