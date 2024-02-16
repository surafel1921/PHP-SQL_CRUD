
<html>
    <body>
  <form action="<?php $_SERVER['PHP_SELF']?>"method="POST" style="text-align:center; margin-top:30px" >
  username<br>
<input type="text" name="username" id=""><br>
password<br>
<input type="password" name="passcode" id=""><br>
gmail<br>
<input type="email" name="email" id=""><br><br>



<input class="btn btn-success" type="submit" value="Insert">

</form><br><br>
    
    </body>


</html>


<?php

require 'connect.php';
if($_SERVER['REQUEST_METHOD']== 'POST'){
  $username=$_POST['username'];
  $passcode=$_POST['passcode'];
  $email=$_POST['email'];




  $sql="INSERT INTO class(username,passcode,email) VALUES ('$username','$passcode','$email')";

  if (mysqli_query($conn,$sql)) {

    echo '<script > ';
    echo 'alert("message successfully Inserted")';
    echo '</script>';


  }else{
 echo '   not insert'.mysqli_error($conn);
  }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>


</style>
<body>
<table class="table table-hover table-dark">
  <thead class="bg-secondary ">
    <tr>
  
      <th  scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Passcode</th>
      <th scope="col">Date</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>



    </tr>
  </thead>
  <?php
$sql="SELECT * FROM class";
$run=mysqli_query($conn,$sql);
if ($run) {

  while($rol=mysqli_fetch_array($run)) {
   ?>
      <tr>
        <td><?php echo $rol['username']?></td>
        <td><?php echo $rol['email'] ?></td>
        <td><?php echo $rol['passcode']?></td>
        <td><?php echo $rol['date']?></td>
        <form action="deleted.php" method="post">
      <!-- <input type="hidden" name="hidden" value="<?php echo $rol['username'] ?>"> -->
      <th><input type="submit" class="btn btn-primary style=" border-radius:999999px" name="update" value="Update "></th>

      
      
      </form>
       <form action="deleted.php" method="post">
      <input type="hidden" name="hidden" value="<?php echo $rol['username'] ?>">
      <th><input type="submit"class="btn btn-danger"  name="delete" value="DELETE "></th>

      
      
      </form>
      </tr>
   <?php
                


  }

}

?>

  <table>

<h3 style=" text-align:center";>&copy;Copywrite <?php echo date('Y') ?></h3>


  </body>
</html>


























