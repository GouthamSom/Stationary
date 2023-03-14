<?php

include("config.php");


if(isset($_POST['submit']))

{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mname=$_POST['mname'];
    $email=$_POST['email'];
    $U_doj=$_POST['U_doj'];
    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];



$sql=" INSERT INTO `admin_reg` (`firstname`, `lastname`, `middlename`,`email`,`DOJ`,`userid`,`password`) values ('$fname', '$lname', '$mname', '$email', '$U_doj', '$uid', '$pwd')";

$result=mysqli_query($conn,$sql);





if($result)
 {
    
    header("location:display.php");

 }

}




?>




<html>
    <title>Stationary</title>
    <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Stationary.css" rel="stylesheet">
        <script src="Stationary.js"></script>


</head>

    <body>    
                 
                  <div class="col-md-6">
            <div class="card" style="margin-top: auto; padding-left: 100px;"> 
              
               <div class="card-body" style="margin-top: auto; float:left;" >                        
                      <?php include('sidebar.php');?>
                      
                 <h5 class="card-title" >Registration</h5>
                <marquee> <p class="card-text">Please fill the details in the form given below</p></marquee>
                                      
                <form name="Login" action="" enctype="multipart/form-data" method="post">
                   
                <label for="firstname" style="padding-left: 200px; color:orange;" >firstname</label>
                    <input type="text" name="fname" value="" placeholder="enter your first name" class="form-control" ><br>
        
                    <label for="lastname" style="padding-left: 200px; color:orange;">lastname</label>
                    <input type="text" name="lname" value="" placeholder="enter your last name" class="form-control"><br>
        
                    <label for="middlename" style="padding-left: 200px; color:orange;">middlename</label>
                    <input type="text" name="mname" value="" placeholder="enter your middle name" class="form-control"><br>
        
                    <label for="email" style="padding-left: 200px; color:orange;">email</label>
                    <input type="email" name="email" value="" placeholder="enter your emailid" class="form-control"><br>
        
                    <label for="DOJ" style="padding-left: 200px; color:orange;">Date of join</label>
                    <input type="date" name="U_doj" value="" class="form-control"><br>
        
                   
                   <label for="userid" style="padding-left: 200px; color:orange;">Userid</label>
                   <input type="text" name="uid" value="" placeholder="enter your userid" class="form-control"><br>
       
                   <label for="password" style="padding-left: 200px; color:orange;">password</label>
                   <input type="password" name="pwd" value="" placeholder="enter your password" class="form-control"><br>
                   
                  <label for="confirm password">confirm password</label>
                  <input type="password" name="cpwd" value="" placeholder="enter confirm password" class="form-control"><br>                                      
                   
                    <button type="upload" name="upload">Upload</butoon>
               
                  <button type="submit" name="submit" >submit</button>
       
                   

                </form>
            </div>    
      </div>         
       </div>
    
    
    
    
    
    </div>
   </body>
</html>

            
   