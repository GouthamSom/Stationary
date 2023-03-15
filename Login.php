<?php

include("config.php");



if(isset($_POST['submit']))
{
$userid=$_POST['userid'];
//$password=$_POST['password'];
$passid=$_POST['passid'];
$empid=$_POST['empid'];



$ins="INSERT INTO `login` (`userid`,`passid`,`empid`) VALUES ('$userid','$passid','$empid')";

$query=mysqli_query($conn,$ins);
   
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
                      
                      
                 <h5 class="card-title" >Login</h5>
                <marquee> <p class="card-text">User Credentials</p></marquee>
                                      
                <form name="Login" action="" enctype="multipart/form-data" method="post">
                   
                <label for="username" style="padding-left: 200px; color:orange;" >userid</label>
                    <input type="text" name="userid" value="" placeholder="enter your first name" class="form-control" ><br>
        
                    <label for="password" style="padding-left: 200px; color:orange;">passid</label>
                   <input type="password" name="passid" value="" placeholder="enter your password" class="form-control"><br>
                    
                    
                   <label for="userid" style="padding-left: 200px; color:orange;">empid</label>
                   <input type="text" name="empid" value="" placeholder="enter your userid" class="form-control"><br>
       
                   
                   
                   
                  
                  <button type="submit" name="submit" >submit</button>
       
                   

                </form>
            </div>    
      </div>         
       </div>
    
    
    
    
    
    </div>
   </body>
</html>

            
   