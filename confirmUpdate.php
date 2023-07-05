<?php

$con =  new mysqli("localhost", "root", "" , "php_ajax");

$name = $_GET['name'];
$email = $_GET['email'];
$pass = $_GET['pass'];
$id = $_GET['id'];


$update = "UPDATE ajax SET name='$name', email='$email',pass='$pass'
WHERE id=$id ";

$ex= mysqli_query($con , $update);

if($ex) {
    echo "Update Success";
} else {
    echo "Update Faild";
}

?>