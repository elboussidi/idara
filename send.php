<?php require 'config.php'; 
  
      if(isset($_POST['email'])){
          $email=$_POST['email'];
         
      }
      
$reed2="SELECT * FROM `info` WHERE `email`='$email' ";
$reedqr2= mysqli_query($conect, $reed2);
if(!$reedqr2){
    die("تعدر الوصول الي المقالات". mysqli_error($conect));
    
} else {   
//    echo ' <div class="post">';
 while ($row2 = mysqli_fetch_assoc($reedqr2)) {
       $id=$row2['id'];
    $name=$row2['name'];
    $status=$row2['status'];
  
    
     echo $email.$id;
 }} 
    

     
    ?>
 
     </div>
 