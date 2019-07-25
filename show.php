<?php require 'config.php';  ?>
<!DOCTYPE html>
<html>
    <head>
        <title> عرض</title>
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
 
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
            
   <?php  
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
                
      ?> 
</table></center>
</body>
</html>