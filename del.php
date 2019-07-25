<?php require 'config.php';  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>تاكيد الحدف</title>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body dir="rtl" >
            <center><br><br><br><br><br><br>

<form method="POST"> 
<?php


if(isset($_GET['id'])){
    $id=$_GET['id'] ;
    echo "
        
رمز التحقق : 
  <input type='password' name='pass' ><br><br>
   <input type='submit' name='del' value='تحقق و حدف' class='btn btn-danger'>
    ";
    if(isset($_POST['del'])){
        $pass=$_POST['pass'];
       $pass2="chichaoua";
      if($pass == $pass2)  {
         
          
 $del="DELETE FROM `info` WHERE `id`='$id';";
 if(mysqli_query($conect, $del)){
     
     
            echo ' <br> <meta http-equiv="refresh" content="2; \'show.php\' /> " ';
          echo ' <br><br><div style="width: 50%;" class="alert alert-success" role="alert">
   تم الحدف بنجاح........جاري تحويل
</div>';
    // header("location:show.php");

     
 }
          
      }else{
          
          echo ' <br><br><div style="width: 50%;" class="alert alert-danger" role="alert">
    رمز التحقق غير صحيح
</div>';
      }
        
        
        
        
    }
}
 ?></form>    </center>
    </body>

</html>