<?php

require 'connect.php';


$sql='SELECT * FROM class';

if (mysqli_query($conn,$sql)) {
    
while ($row=mysqli_fetch_array($sql)) {
    ?>
<html>
    <body>
        <h1><?php echo $row['username']?></h1>
</body>
</html>

    <?php







}

}



?>