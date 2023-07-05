<?php
      
      $con =  new mysqli("localhost", "root", "" , "php_ajax");
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];

      $insert = "INSERT INTO ajax(name,email,pass) 
      VALUES ('$name','$email','$pass')";
      $query = mysqli_query($con, $insert);

      if($query) {
        echo "Data insert Successfully";
      } else{
        echo "Faild";
      }

?>
