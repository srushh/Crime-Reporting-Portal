<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css" /> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>     

<?php

include 'connect.php';
 
$city=$_POST['city'];
$crime=$_POST['crime'];
$timing=$_POST['timing'];
$victims=$_POST['victims'];

$result= mysqli_query($conn,"INSERT INTO activities(city,crime,timing,victims) VALUES('$city','$crime','$timing','$victims')");

//<i class="fa fa-spinner fa-pulse" style="font-size:60px"></i>';

//


    echo '</head>
    <body>
        <div class="container">
        <i class="fa fa-spinner fa-pulse" style="font-size:60px"></i>;
        </div>
    </body>'
          
?>
</html>




