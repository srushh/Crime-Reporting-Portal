<?php
    $conn = mysqli_connect('localhost','root','','mysql',3308);
    mysqli_select_db($conn,'mysql');
    
    if(!$conn)
        echo 'Error!';

?>

