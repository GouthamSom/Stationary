<?php

/*include("config.php");


if(isset($_POST['submit']))

{
    $name=$_POST['name'];



$sql=" INSERT INTO `dashboard`(`name`) values ('$name')";


$result=mysqli_query($conn,$sql);

 if($result)
 {
    echo "data inserted sucessfully";

 }

 else
 {
    die(mysqli_error($conn));
 }



 

}*/

?>
<html>
    <body>
    <html>
    <title>Stationary</title>
    <head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Stationary.css" rel="stylesheet">
        <script src="Stationary.js"></script>
    </head>
       <body class="Sta-bod">
        <div class="container">
          
<?php

include('sidebar.php')       
?>


            
</div>
</body>
</html>