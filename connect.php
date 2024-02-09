<?php

$conn=mysqli_connect('localhost','root','','student');
if(!$conn){
    die('not connected'.mysqli_connect_Error($conn));
}

?>