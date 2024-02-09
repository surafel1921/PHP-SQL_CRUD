<?php
require 'connect.php';

if (isset($_POST['delete'])) {
    $username=$_POST['hidden'];
    $deleted="DELETE FROM class WHERE username='$username'";
    $query=mysqli_query($conn,$deleted);

if ($query) {
   
   header('location:php.php');
  

}
echo 'not deleted';

}

?>