<?php


// mysqli_select_db($conn, $des);

if(isset($_POST['submit']))
{
$userid = $_POST['userid'];
$passid = $_POST['passid'];
$empid=$_POST['empid'];



$s=mysqli_connect("localhost", "root","","stationary_pgm") or die(mysql_error());//connect to server
		$s1=mysqli_select_db($s,"stationary_pgm") or die("cannot connect to database");//connect to database

    $des=mysqli_query($s,"SELECT *FROM  `login` Where userid='$userid'");



   /* if (empty($userid)) {
        array_push($errors, "Userid is required"); 
    }
    if (empty($passid)) {
        array_push($errors, "passid is required"); 
    }

    if (empty($empid)) {
        array_push($errors, "empid is required"); 
    }
     
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt password before storing in database (security)
        $sql = "INSERT INTO login (userid, passid, empid) 
                    VALUES ('$userid','$passid', '$empid')";
        mysqli_query($s,$sql);
    }*/


    while($row = mysqli_fetch_assoc($des))
{

        $check_username = $row['userid'];
        $check_password = $row['passid'];
        $check_empid=$row['empid'];
    
    if ($userid == $check_username && $passid == $check_password  && $empid==$check_empid)  {
        
        
        header("Location:admin.php");
    } 
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
                      
                      
                 <h5 class="card-title" >Login</h5>
                <marquee> <p class="card-text">User Credentials</p></marquee>
                                      
                <form name="Login" action="" enctype="multipart/form-data" method="post">
                   
                <label for="userid" style="padding-left: 200px; color:orange;" >username</label>
                    <input type="text" name="userid" value="" placeholder="enter your first name" class="form-control" ><br>
        
                    <label for="password" style="padding-left: 200px; color:orange;">password</label>
                   <input type="password" name="passid" value="" placeholder="enter your password" class="form-control"><br>
                    
                    
                   <label for="employeeid" style="padding-left: 200px; color:orange;">employeeid</label>
                   <input type="text" name="empid" value="" placeholder="enter your userid" class="form-control"><br>
       
                   
                   
                   
                  
                  <button type="submit" name="submit" >submit</button>
       
                   

                </form>
            </div>    
      </div>         
       </div>
    
    
    
    
    
    </div>
   </body>
</html>

            
   