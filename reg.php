<?php
require '../connect.php';

?>
<!DOCTYPE html>
<html lang="en">
    <title>regester page</title>
     <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
   
</head>


<body style="background-color: #e9ecef;">
     <?php   include '../header.php'; ?>
    
    
    
 <br><br>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()"  method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="uname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="uemail">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right"> YOUR role</label>
                                    <div class="col-md-6">
                                      <select name="urole" >
                                        <option> student</option>
                                        <option> prof</option>
                                        <option> derecteure</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="uphone">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="present_address" class="form-control" name="upassword">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right"> Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanent_address" class="form-control" name="uaddress">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nid_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">date b</label>
                                    <div class="col-md-6">
                                        <input type="date" id="nid_number" class="form-control" name="udate">
                                    </div>
                                </div>
           <div class="form-group row">
                                    <label for="nid_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">photo</label>
                                    <div class="col-md-6">
                                        <input type="file" id="nid_number" class="form-control" name="file">
                                    </div>
                                </div>
          
                <div style="margin-left:180px ;" class="form-group row">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female" name="ugender" > Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male" name="ugendre"> Male
                                </label>
                            </div>
                        </div>
                    </div>
          
                                    <div class="col-md-6 offset-md-4">
                                         <input type="submit" class="btn btn-primary" value="regester" name="reg" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
    
          <?php
          
    if(isset($_POST['reg'])){

   $uname=$_POST['uname'];
    $uemail=$_POST['uemail'];
     $uphone=$_POST['uphone'];
      $udate=$_POST['udate'];
      $uaddress=$_POST['uaddress'];
       $upassword=$_POST['upassword'];
        $ulev=$_POST['urole'];
        $ugender=$_POST['ugender'];
       
        
     
         $path='http://elboussidi.eb2a.com/madrasa/img/'.$_FILES['file']['name'];
      $dir="../img/".$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$dir);
        

       
    $ins="INSERT INTO `usr` (`id`, `name`, `photo`, `email`, `password`, `lev`, `phone`, `date_b`, `date_c`, `gender`, `position`, `bio`)"
            . " VALUES (NULL, '$uname', '$path', '$uemail', '$upassword', '$ulev', '$uphone', '$udate', CURRENT_TIMESTAMP, '$ugender', '$uaddress', '')";
    $qins= mysqli_query($conect, $ins) ;
    if($qins){
       echo '<div class="alert alert-success" role="alert">
 your data has been insert !
</div> ';   
       echo '<script>
    alert("regester is done") ;
    
    </script>';
     
    } else {
        
    
        echo '<div class="alert alert-danger" role="alert">
 sorry eroor password !
</div> '; 
    } }
    
    ?>
            </div>
        </div>
    </div>

</main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function validform() {

        var a = document.forms["my-form"]["full-name"].value;
        var b = document.forms["my-form"]["email-address"].value;
        var c = document.forms["my-form"]["username"].value;
        var d = document.forms["my-form"]["permanent-address"].value;
        var e = document.forms["my-form"]["nid-number"].value;

        if (a==null || a=="")
        {
            alert("Please Enter Your Full Name");
            return false;
        }else if (b==null || b=="")
        {
            alert("Please Enter Your Email Address");
            return false;
        }else if (c==null || c=="")
        {
            alert("Please Enter Your Username");
            return false;
        }else if (d==null || d=="")
        {
            alert("Please Enter Your Permanent Address");
            return false;
        }else if (e==null || e=="")
        {
            alert("Please Enter Your NID Number");
            return false;
        }

    }
    </script>


    </body>
</html>








