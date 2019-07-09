<html>
    <head>
        <title>
            Statistics
        </title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" type="text/css" /> 
    <link rel="stylesheet" type="text/css" href="demo.css" />
        <link rel="stylesheet" type="text/css" href="style2.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <style>
        legend {
    font-family: Lucida Sans Unicode;        
    background-color: #000;
    color: #fff;
    padding: 3px 6px;
}
.fontfam {
    font-family: Lucida Sans Unicode;
}

footer{
     background-color: #000;
     width: 100%;
}
img{
    padding-bottom: 5px;
    padding-top: 5px;
}

select {
    font: inherit;
}

fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

legend.scheduler-border {
    width:inherit; /* Or auto */
    padding:0 10px; /* To give a bit of padding on the left and right */
    border-bottom:none;
}
.control {
    margin: 1rem 0;
}


.abc {
    font-size: .7em;
    color: #999;
    float:right;
}

.header img {
  float: left;
  width: 75px;
  height: 75px;
}

.display-inline{
    font-size: 12px; 
}

footer{
    position: fixed;
    bottom: 0;
}

.header h3{
  position: relative;
  display: inline;
  top: 18px;
  left: 10px;
}
.header h6{
  position: relative;
  top: 12px;
  left: 10px;
}
.error {color: #FF0000;}
.width-control{
    width: 250px;
}
            </style>
    </head>
    <body style="font-family: Lucida Sans Unicode">
        <nav class="icon-bar navbar-inverse navbar-fixed-top">
            <div class="container">
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                     <div class="header">
                         <img src="img/logo1.jpg">
                         <h3 style="color:#ffffff">CRIME REPORTING PORTAL&nbsp;&nbsp;&nbsp;</h3>
                     <h6 style="color:#cccccc">Government Of Maharashtra | Ministry Of Home Affairs</h6>
                     </div>

                 </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-home" style="font-size:36px"></i></a></li>
                        <li><a href="signup.php"><i class="fa fa-user-circle" style="font-size:36px"></i></a></li>
                        <li><a href="login.php"><i class="fa fa-sign-in" style="font-size:36px"></i></a></li>
                        <li><a href="#"><i class="fa fa-users" style="font-size:36px"></i></a></li>
                    </ul>
                </div>
                </div> 
            </nav>
        <br><br><br><br><br><br><br>
   
        <div class="container">
            <h2>CRIME RECORD OF MAHARASHTRA </h2>
            <h4>YEAR 2017-2018</h4>
  <table class="table table-bordered">

<?php
    $conn = mysqli_connect('localhost','root','','mysql',3308);
    mysqli_select_db($conn,'mysql');
    $g;$c;$v;$cat;$gr;
    $l="Low Prone";
    $m="Medium Prone";
    $h="High Prone";
    
    mysqli_query($conn,"TRUNCATE TABLE highprone;");
    
    if($conn)
    {
        $sql = "SELECT city,sum(victims) FROM activities GROUP BY city ORDER BY sum(victims) DESC";
        $result = mysqli_query($conn, $sql);
        echo '    <thead>
      <tr>
        <th>CITY</th>
        <th>TOTAL VICTIMS</th>
      </tr>
    </thead>
    <tbody>';
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $c=$row["city"];
                $v=$row["sum(victims)"];
                mysqli_query($conn,"INSERT INTO statistics(city,totalVictims) VALUES('$c','$v')");
                echo "<tr><td>" . $row["city"]. "</td><td>". $row["sum(victims)"]. "</td></tr>";
                $g=$row["sum(victims)"]*0.5;
                if($row["sum(victims)"]>20 && $row["sum(victims)"]<50){
                    mysqli_query($conn,"INSERT INTO highprone(city,category,victims,growth) VALUES('$c','$m','$v','$g')");
                }elseif ($row["sum(victims)"]>50) {
                    mysqli_query($conn,"INSERT INTO highprone(city,category,victims,growth) VALUES('$c','$h','$v','$g')");    
                  } else {
                    mysqli_query($conn,"INSERT INTO highprone(city,category,victims,growth) VALUES('$c','$l','$v','$g')");                          
                  }
                  $sqlquery="DELETE FROM statistics WHERE city='$c'";
                 mysqli_query($conn,$sqlquery);    
     
            }
            echo '</tbody>'
            . '</table>';
        } else {
            echo "0 results";
        }
        
            echo '<br><br> <div class="container">
            <h2>GROWTH RATE OF CRIME </h2>
            <h4>YEAR 2017-2018</h4>
            <table class="table table-bordered">';  
            $query="SELECT * FROM highprone";
            $result1 = mysqli_query($conn, $query);
        echo '    <thead>
      <tr>
        <th>CITY</th>
        <th>CATEGORY</th>
        <th>TOTAL VICTIMS</th>
        <th>GROWTH RATE</th>
      </tr>
    </thead>
    <tbody>';
        if (mysqli_num_rows($result1) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result1)) {
                $cat=$row["category"];
                $gr=$row["growth"];
                echo "<tr><td>" . $row["city"]. "</td><td>".$cat."</td><td>". $row["victims"]. "</td><td>".$gr."</td></tr>";
            }
            echo '</tbody>'
            . '</table><br><br><br><br><br>';
        }
 else {
      echo "0 results";
 }
    
    } else {
        echo 'Error!';
    }
    
    
    
    
    
    
    
    
?>
      
    </tbody>
  </table>
</div>

                               
                            <footer>
            <div class="container">
            <center>
                <p style="padding-top: 2px;">Copyright © All Rights Reserved | MHA Contact Us: +91 90000 00000</p>
            </center>
            </div>
        </footer>  
    </body>
</html>



