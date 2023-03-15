<html>
    <title>Stationary</title>
    <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Stationary.css" rel="stylesheet" type="text/css">
        <script src="Stationary.js"></script>


</head>

    <body>    
                 

    <?php include('sidebar.php');?>

                  <div class="col-md-8">
            <div class="card" style="margin-top: auto; padding-left:auto; margin:120px;"> 
              
               <div class="card-body" style="margin-top: auto; float:left;" >                        
                     
                      
                 <h5 class="card-title" >Employee</h5>
                <marquee> <p class="card-text">Please fill the details in the form given below</p></marquee>
                                      
                <form name="Login" action="" enctype="multipart/form-data" method="post">
                   
                <label for="firstname" style="padding-left: 200px; color:orange;" >firstname</label>
                    <input type="text" name="fname" value="" placeholder="enter your first name" class="form-control" ><br>
        
                    <label for="lastname" style="padding-left: 200px; color:orange;">lastname</label>
                    <input type="text" name="lname" value="" placeholder="enter your last name" class="form-control"><br>
        
                    <label for="middlename" style="padding-left: 200px; color:orange;">middlename</label>
                    <input type="text" name="mname" value="" placeholder="enter your middle name" class="form-control"><br>
        
                    <label for="email" style="padding-left: 200px; color:orange;">email</label>
                    <input type="text" name="email" value="" placeholder="enter your emailid" class="form-control"><br>
        
                    <label for="DOJ" style="padding-left: 200px; color:orange;">Date of join</label>
                    <input type="date" name="DOJ" value="" class="form-control"><br>

                    <label for="DOR" style="padding-left: 200px; color:orange;">Date of Releiving</label>
                    <input type="date" name="DOR" value="" class="form-control"><br>
        
                   
                    <label for="DOB" style="padding-left: 200px; color:orange;">Date of Birth</label>
                    <input type="date" name="DOB" value="" class="form-control"><br>

                    <label for="gender" style="padding-left: 200px; color:orange;">gender</label><br>
                    <input type="radio" name="gender" id="male" value="male" >
                    <label for="male" style=" color:orange;">male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female" style="color:orange;">female</label>
                    <br>
                        
                    

                   <label for="userid" style="padding-left: 200px; color:orange;">Userid</label>
                   <input type="text" name="uid" value="" placeholder="enter your userid" class="form-control"><br>
       
                   <label for="password" style="padding-left: 200px; color:orange;">password</label>
                   <input type="password" name="pwd" value="" placeholder="enter your password" class="form-control"><br>
                   
                  <label for="confirm password">confirm password</label>
                  <input type="password" name="cpwd" value="" placeholder="enter confirm password" class="form-control"><br>    
                  
                  
                  <label for="Designation" style="padding-left: 200px; color:orange;">Designation</label>
                    <input type="text" name="designation" value=""  placeholder="enter your designation" class="form-control"><br>

                    <label for="Check-in" style="padding-left: 200px; color:orange;">Check in</label>
                    <input type="time" name="check-in" value=""  class="form-control"><br>

                    <label for="check-out" style="padding-left: 200px; color:orange;">check-out</label>
                    <input type="time" name="check-out" class="form-control"><br>

                    <label for="comp-mail-id" style="padding-left: 200px; color:orange;">comp-mail-id</label>
                    <input type="text" name="mailid" value=""  placeholder="enter your mailid" class="form-control"><br>

                    <label for="performance" style="padding-left: 200px; color:orange;">performance</label>
                    <textarea id="text"  style="padding-left: 200px; color:orange;"></textarea><br>











                <button type="submit" name="submit" style="  margin:20px;" >update</button>
       
                   

                </form>
            </div>    
      </div>         
       </div>
    
    
    
    
    
    </div>
   </body>
</html>

<?php

include("config.php");

$id=$_GET['updateid'];


if(isset($_POST['submit']))

{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mname=$_POST['mname'];
    $email=$_POST['email'];
    $DOJ=$_POST['DOJ'];
    $DOR=$_POST['DOR'];
    $DOB=$_POST['DOB'];
   
    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];
    $des=$_POST['designation'];





$sql="UPDATE `employee` SET `id`='$id',`first name`='$fname',`last name`='$lname',`middle name`='$mname',`email`='$email',`DOJ`='$DOJ',`DOR`='$DOR',`DOB`='$DOB',`userid`='$uid',`password`='$pwd',`designation`='$des' WHERE  id=$id";


$result=mysqli_query($conn,$sql);


if($result)
{
    header("location:display.php");
}



}




?>
         
   