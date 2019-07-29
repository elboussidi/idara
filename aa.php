<!DOCTYPE html>
<html>
<head>
	<title> suivi</title>
            <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" >
</head>
<body dir="rtl">
    <form method="POST"  >
        <input type="submit" name="submit">
        
    </form>  
    

   <?php 
  if(isset($_POST['submit'])){
     
      
      
      $headers="from : majid" ;
      $subject="cantact form";
      $message=$_POST['msg']; ;
      $email=$_POST['email'];
      mail($email, $subject, $message , $headers);
      echo 'your imail is send';
      
  }
   ?>  
    
</center>
</body>
</html>
