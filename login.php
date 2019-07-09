<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
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
#banner-content{
 position: fixed;
 align-content: center;
 left: 25%;
 padding-top: 6%;
 padding-bottom: 6%;
 padding-left: 6%;
 padding-right: 6%;
 margin-top: 12%;
 margin-bottom: 12%;
 background-color: rgba(0, 0, 0, 0.7);
 max-width: 1000px;
}

.bg{
    background-image: url("img/theme2.jpg");
    background-repeat: no-repeat;
    height: 100%; 
    background-position: center;
    background-size: cover;
}
        </style>
        <script>

            </script>
            <body class="fontfam">
            <nav class="icon-bar navbar-inverse">
            <div class="container">
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
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
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-home" style="font-size:36px"></i></a></li>
                        <li><a href="signup.php"><i class="fa fa-user-circle" style="font-size:36px"></i></a></li>
                        <li><a href="main.php"><i class="fa fa-sign-out" style="font-size:36px"></i></a></li>
                        <li><a href="result.php"><i class="fa fa-bar-chart" style="font-size:36px"></i></a></li>
                    </ul>
                </div>
                </div> 
            </nav>
                <br><br>
            <marquee><b>Please Note :</b> <i>Citizen can report a crime using this facility. In order to report a crime, user has to register on this Portal.</i></marquee>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="panel">
                        <div class="panel-body"><br><br>
                            <p class="text-warning" style="font-size:24px">Login to make a report</p><br>
                        </div>
                        <form action="abc.php" method="post">
                        <div class="form-group">
                        <label for="email">Email-id: </label><span class="error">*</span>
                        <input type="text" class="form-control input-lg" name="email" style="width:75%">
                        <br><br>
                        </div>
                        <div class="form-group">
                        <label for="password">Password: </label><span class="error">*</span>
                        <input type="password" class="form-control input-lg" name="password" style="width:75%">
                        </div>
                    
                            
                        <button type="submit" class="btn btn-primary">Submit</button><br><br>
                    </form>
    
                        <br>
                        <div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
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
