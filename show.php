<?php require 'config.php';  ?>
<!DOCTYPE html>
<html>
    <head>
        <title> عرض</title>
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body dir="rtl">
                <ul class="nav nav-tabs">
  <li class="nav-item">
      <a class="nav-link" href="index.php">اضافة</a>
  </li>
  <li class="nav-item">
      <a class="nav-link  active" href="show.php">عرض</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="suivi.php">تتبع</a>
  </li>
 
</ul>
<br><br>
<center>
  <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>
                <table class="table" style="margin-left: 5% ;margin-right: 2%;">
                <thead>
                    <tr>
                        <th>
                           #
                        </th>
                        <th>
                           صاحب الطلب
                        </th>
                         <th>
                 البريد
                        </th>
                        
                             <th>
                          الحالة
                        </th>
                           <th>
                          تاريخ التسجيل
                        </th>
                           <th>
                         تحرير
                        </th>
                        
                        
                    </tr>
                </thead>
                <tbody>
            
   <?php   $ids=mysqli_insert_id($conect); 
             echo $ids;
      $sqlcom="SELECT * FROM `info` ";

      $sq3= mysqli_query($conect, $sqlcom);
      if(!$sq3){
          echo 'لم نتمكن من الوصول الي البيانات';
      }
      else{
          while ($row3 = mysqli_fetch_assoc($sq3)) {
                $id=$row3['id'];
                 $name=$row3['name'];
                $status=$row3['status'];
                $email=$row3['email'];
             $date=$row3['date'];
                 $tot= mysqli_num_rows($sq3);

               echo "
               <tr class='active'>
              <td>
                         $id
                        </td>  
                        <td>
                          $name
                        </td>
                        <td>
                          $email
                        </td>
                        <td>
                           $status
                        </td><td>
                           $date
                        </td>
                         <td>
                           <a href='del.php?id=$id' class='btn btn-danger' title='حدف' data-toggle='tooltip'> حدف  </a>
                       <a href='update.php?id=$id'> <button type='button'  title='تعديل' class='btn btn-primary'>تعديل</button></a> 
                        
                        </td>
                       
                    </tr>
             </tbody>
        ";
      }
//'
                    
//  if(empty($autcom)){
//                   $autname=" مجهول";
//               }
 echo '<h3 class="alert alert-info" role="alert">
 الطلبات
 ('. $tot.') </h3>';
                }
                if(isset($_GET['m']) AND isset($_GET['mm'])   ){
                    
                   $iid= $_GET['m'];
                    $emaill=$_GET['mm'];
                    
   $headers="from : majid" ;
      $subject="رقم تتبع";
      $message="
             مرحبا:$name
            رقم الخاص بكم : $iid
                https://earthly-strikers.000webhostapp.com/suivi.php يمكنكم تتبع طلبكم عبرالرابط التالي 
             
                 
              عبدالمجيد البوسعيدي
              "
               ;
   if(
      mail($emaill, $subject, $message , $headers) )  {
       echo '<script> alert("تم الارسال");  location.replace ("show.php"); </script>';
      } else {
            echo '<script> alert(" '. mysqli_error($conect).'");  location.replace ("show.php"); </script>';
      }
        
                
}    
                
   ?>
</table></center>
</body>
</html>