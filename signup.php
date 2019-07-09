<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Signup</title>
        <link href="style.css" rel="stylesheet" type="text/css" /> 
        <meta charset="UTF-8">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
}


.header img {
  float: left;
  width: 75px;
  height: 75px;
}

.display-inline{
    font-size: 12px; 
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
.bg{
    background-image: url("img/signup3.jpg");
    background-repeat: no-repeat;
    height: 100%; 
    background-position: center;
    background-size: cover;
}

legend.scheduler-border {
    width:inherit; /* Or auto */
    padding:0 10px; /* To give a bit of padding on the left and right */
    border-bottom:none;
}
.control {
    margin: 1rem 0;
}
img{
    padding-bottom: 5px;
    padding-top: 5px;
}
.abc {
    font-size: .7em;
    color: #999;
    float:right;
}

.width-control{
    width: 250px;
}
.indent {
    padding-left:6.5em;
    color: #ffffff;
}
        </style>
        <script>

            </script>
            <body class="fontfam">
               <div class="bg">   
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
                        <li><a href="main.php"><i class="fa fa-home" style="font-size:36px"></i></a></li>
                        <li><a href="login.php"><i class="fa fa-sign-in" style="font-size:36px"></i></a></li>
                        <li><a href="helpline.php"><i class="fa fa-phone" style="font-size:36px"></i></a></li>
                    </ul>
                </div>
                </div> 
            </nav>
               
                    <h3 class="indent">Sign Up</h3>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="panel">
                        <div class="panel-body">
                            
                        </div>
                        
                        <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Fill your details</legend>
        <div class="container">        
            <div class="row row_style">  
                <div class="col-xs-3">

                    <form action="insertDetails.php" method="post">
                        <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Name" name="name"><br>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="City" name="city"><br>
                        </div>                        
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Email" name="email"><br>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Contact" name="contact"><br> 
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Password" name="password"><br>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button><br><br><br><br>
                    </form>
                    
                </div>    
            </div>
        </div> 
                 </fieldset>
                        <br>
                        <div class="panel-footer">Want to see the statistics? <a href="result.php">Click here!</a></div>
                    </div>
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
