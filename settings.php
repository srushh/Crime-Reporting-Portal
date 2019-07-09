<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Report</title>
        <link href="style.css" rel="stylesheet" type="text/css" /> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>        
    </head>
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
        <script>

            </script>
            <body class="fontfam">
                        <?php
                        $conn = mysqli_connect('localhost','root','','mysql',3308);
                        mysqli_select_db($conn,'mysql');
                        $passErr1=$passErr2=$email="";
                        if($conn)
                        {
                        if(empty($_POST["email"])) {
                            $email="Email is required!";
                        }   
                        if (empty($_POST["password1"])) {
                            $passErr1 = "Password is required!";
                          } 
                        if (empty($_POST["password2"])) {
                            $passErr2 = "Re-Password is required!";
                          } 
                          
                        if (isset($_POST['email']) and isset($_POST['password1'])){
                        $em=$_POST['email'];    
                        $p1 = $_POST['password1'];
                        $p2=$_POST['password2'];
                        if($p1==$p2)
                        {
                        $sql = "UPDATE users SET password='$p1' WHERE email='$em'";
                        mysqli_query($conn, $sql);
                        header("Location:http://localhost/DBMS/login.php");
                        }
                        }} else {
                            echo 'Connection unsuccessful!';
                        }
  

                        ?>
                
            <nav class="icon-bar navbar-inverse">
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
                        <!--<li><a href=""><i class="fa fa-phone" style="font-size:36px"></i></a></li>-->
                        <div class="dropdown">
                            <li><a href="main.php"><i class="fa fa-user"  style="font-size:36px" style="padding-top: 30px"></i></a></li>  
                          <div class="dropdown-content">
                            <a href="#">Profile</a>
                            <a href="settings.php">Settings</a>
                            <a href="main.php">Log Out</a>
                          </div>
                        </div>

                        <!--<li><a href="main.php"><i class="fa fa-sign-out" style="font-size:36px"></i></a></li>-->
                    </ul>
                </div>
                </div> 
            </nav>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="panel">
                        <div class="panel-body"><br><br>
                            <p class="text-warning">Change Password</p><br><br><br>
                        </div>
                        
                 
                        <form action="settings.php" method="post">
                        <div class="form-group">
                        <label for="email">Email-id: </label><span class="error">*</span>
                        <input type="text" class="form-control input-lg" name="email">
                        <br><br><br>
                        </div>
                        <div class="form-group">
                        <label for="password">Confirm Password: </label><span class="error">*</span>
                        <input type="password" class="form-control input-lg" name="password1">
                        </div><br><br><br>
                        <div class="form-group">
                        <label for="password">Re-Confirm Password: </label><span class="error">*</span>
                        <input type="password" class="form-control input-lg" name="password2">
                        </div><br><br><br>
                        <button type="submit" class="btn btn-primary" onclick="myFunction()">Submit</button><br>
                        <p id="demo"></p><br><br>
                    </form>
                        <script>
                            function myFunction() {
                                var txt;
                                if (confirm("Password updated!")) {
                                    txt = "You pressed OK!";
                                } else {
                                    txt = "You pressed Cancel!";
                                }
                                document.getElementById("demo").innerHTML = txt;
                            }
                            </script>

                        <br>
                    </div>
                </div>
            </div>
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
