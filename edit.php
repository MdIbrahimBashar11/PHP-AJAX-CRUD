<?php
  $con =  new mysqli("localhost", "root", "" , "php_ajax");

 $id =  $_GET['userid'];

 $select = "SELECT * FROM ajax WHERE id = $id";
 $ex = mysqli_query($con , $select);

 $row = mysqli_fetch_array($ex);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body id="body">

    <br>
     <div class="container card">
        <h1 class="text-center" >Update Data</h1>
        <input value="<?php echo $row['name'] ?>" id="name" class="form-control"  type="text" name="name" placeholder="Name.." >
        <br> 
        <input value="<?php echo $row['email'] ?>" id="email" class="form-control"  type="email" name="email" placeholder="Email.." >
        <br> 
        <input value="<?php echo $row['pass'] ?>" id="pass" class="form-control" type="text" name="pass" placeholder="Password.." >
        <br> 
       
        <button onclick="UPDATE(<?php echo $row['id'] ?>)" class="edit btn btn-success">Update Data</button>
     </div>
</body>
</html>