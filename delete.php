<?php
$con =  new mysqli("localhost", "root", "" , "php_ajax");

$userid = $_POST['userid'];

$delete = "DELETE FROM ajax WHERE id=$userid";

$query = mysqli_query($con ,$delete);

if($query) {
    echo "Data deleted";
} else {
    echo "Data Delete faild";
}
?>