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
img{
    padding-bottom: 5px;
    padding-top: 5px;
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

.width-control{
    width: 250px;
}
footer{
     background-color: #555;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

i{
    color: #999999;
    padding-top: 20px;
}
        </style>
        <script>

            </script>
            <body class="fontfam">
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
                            <li><a href="main.php"><i class="fa fa-user"  style="font-size:36px"></i></a></li>  
                          <div class="dropdown-content">
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
                        <div class="panel-body">
                            <p class="text-warning">Fill the Details to make a report</p>
                        </div>
                        
                        <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Report details</legend>
                    <form action="insertReport.php" method="post">
                        <div class="form-group">

                        <div class="form-group">
                         <label for="city">City: </label><br>
                        <div class="col-xs-6">
                        <select class="form-control" name="city">
                        <option>Pune</option>
                        <option>Mumbai</option>
                        <option>Thane</option>
                        <option>Nasik</option>
                        <option>Nagpur</option>
                        <option>Aurangabad</option>
                        <option>Kolhapur</option>
                        <option>Ratnagiri</option>
                        </select>
                          </div>  
                        </div>
                        <br><br><br>

                        <div class="form-group">
                        <label for="crime">Crime: </label><br>
                        <div class="col-xs-6">
                            <select class="form-control" name="crime">
                        <option>Kidnapping</option>
                        <option>Theft</option>
                        <option>Rape</option>
                        <option>Murder</option>
                        <option>Riot</option>
                        </select>
                        </div>
                        </div>
                        <br><br><br>
                        
                        <div class="form-group">
                        <label for="time">Time: </label><br>
                        <div class="col-xs-6">
                        <select class="form-control" name="timing">
                        <option>Morning</option><span class="abc">5am-11am</span>
                        <option>Afternoon</option><span class="abc">12pm-4am</span>
                        <option>Evening</option>
                        <option>Night</option>
                        <option>Midnight</option>
                        </select>
                          </div>
                        </div>
                        <br><br><br>

                        <div class="form-group">
                            <label for="victims">Number of victims:</label>
                            <input type="number" class="form-control width-control" name="victims"><br><br>
                        </div> 
                        <button type="submit" class="btn btn-primary" onclick="myReport()">Submit</button><br><br>
                        <p id="demo"></p>
                    </form>
                 </fieldset>
                        <script>
                            function myReport() {
                                var txt;
                                if (confirm("Reported!")) {
                                    txt = "You pressed OK!";
                                } else {
                                    txt = "You pressed Cancel!";
                                }
                                document.getElementById("demo").innerHTML = txt;
                            }
                            </script>                        
                        <br>
                        <div class="panel-footer">Want to see the statistics? <a href="result.php">Click here!</a></div>
                    </div>
                </div>
            </div>
        </div>        
        <footer>
            <div class="container">
            <center>
                <p>Copyright © All Rights Reserved | MHA Contact Us: +91 90000 00000</p>
            </center>
            </div>
        </footer>         
    </body>
</html>
