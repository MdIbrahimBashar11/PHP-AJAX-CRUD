<?php
$con =  new mysqli("localhost", "root", "" , "php_ajax");

$select =  "SELECT * FROM ajax";

$ex = mysqli_query($con , $select);

while($row=mysqli_fetch_array($ex)){ ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['pass'] ?></td>
        <td><button 
          onclick="Delete(<?php echo $row['id'] ?>)"
        class="btn btn-danger">Delete</button></td>
        <td><button
        onclick="Edit(<?php echo $row['id'] ?>)"
        class="btn btn-info">Edit</button></td>
    </tr>
<?php }

?>