<?php

include ('config.php');
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Stationary.css" rel="stylesheet" type="text/css">
        <script src="Stationary.js"></script>
</head>
    <body style="background-color:orange">
    <table class="tab-body">
    <thead class="t-h">
    <tr class="t-r">
       
        <th class="t-r">firstname</th>
        <th  class="t-r">lastname</th>
        <th  class="t-r">middlename</th>
        <th  class="t-r">email</th>
        <th  class="t-r">doj</th>
        <th  class="t-r">dor</th>
        <th  class="t-r">dob</th>
        <th  class="t-r">userid</th>
        <th  class="t-r">password</th>
        <th  class="t-r">designation</th>
        <th  class="t-r">action</th>
</tr>
</thead>


<?php
$dis= "select *from employee  where id>0 ";

$dis1=mysqli_query($conn,$dis);


    while($row=mysqli_fetch_assoc($dis1))
    {
        $id=$row['id'];
        $fname=$row['first name'];
        $lname=$row['last name'];
        $mname=$row['middle name'];
        $email=$row['email'];
        $DOJ=$row['DOJ'];
        $DOR=$row['DOR'];
        $DOB=$row['DOB'];
        $uid=$row['userid'];
        $pwd=$row['password'];
        $des=$row['designation'];
       
        

        echo '<tr>

                <tb>'.$id.'</td>
                <td>'.$fname.'</td>
                <td>'.$lname.'</td>
                <td>'.$mname.'</td>
                <td>'.$email.'</td>
                <td>'.$DOJ.'</td>
                <td>'.$DOR.'</td>
                <td>'.$DOB.'</td>
                <td>'.$uid.'</td>
                <td>'.$pwd.'</td>
                <td>'.$des.'</td>
                <td><button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">update</button>
                <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">delete</button>
    </tr>';


    }
    



    
   ?>


</table>   
</body>
</html>