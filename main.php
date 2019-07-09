<!DOCTYPE html>
<html>
<head>
    <title>Crime Reporting Portal | Maharashtra</title>
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
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin: auto;
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
 max-width: 660px;
}

.fontfam {
    font-family: Lucida Sans Unicode;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-family: Lucida Sans Unicode;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}
.icon-bar {
    width: 100%;
    background-color: #000;
    overflow: auto;
}

.indent {
    padding-left: 1.8em;
}

.icon-bar a {
    float: left;
    width: 20%;
    text-align: center;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: white;
    font-size: 36px;
}

.icon-bar a:hover {
    background-color: #000;
}

.active1 {
    background-color: #4CAF50;
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
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .2} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .2} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.crossfade > figure {
  animation: imageAnimation 30s linear infinite 0s;
  backface-visibility: hidden;
  background-size: cover;
  background-position: center center;
  color: transparent;
  height: 100%;
  left: 0px;
  opacity: 0;
  position: absolute;
  top: 0px;
  width: 100%;
  z-index: 0;
}

.crossfade > figure:nth-child(1) { background-image: url('img/riot_wide1.jpg'); }

.crossfade > figure:nth-child(2) {
  animation-delay: 6s;
  background-image: url('img/rape_wide.jpg');
}

.crossfade > figure:nth-child(3) {
  animation-delay: 12s;
  background-image: url('img/murder_wide.jpg');
}

.crossfade > figure:nth-child(4) {
  animation-delay: 18s;
  background-image: url('img/robbery_wide.jpg');
}

.crossfade > figure:nth-child(5) {
  animation-delay: 24s;
  background-image: url('img/murder_wide.jpg');
}
 
@keyframes 
imageAnimation {  0% {
 animation-timing-function: ease-in;
 opacity: 0;
}
 8% {
 animation-timing-function: ease-out;
 opacity: 1;
}
 17% {
 opacity: 1
}
 25% {
 opacity: 0
}
 100% {
 opacity: 0
}

}
footer{
    position: fixed;
    bottom: 0;
}
img{
    padding-bottom: 5px;
    padding-top: 5px;
}
header{
    position: fixed;
    top: 0; 
}
</style>
</head>
<body class="fontfam">
 
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
                        <li><a href="main.php"><i class="fa fa-home"></i></a></li>
                        <li><a href="signup.php"><i class="fa fa-user-circle"></i></a></li>
                        <li><a href="login.php"><i class="fa fa-sign-in"></i></a></li>
                        <li><a href="helpline.php"><i class="fa fa-phone"></i></a></li>
                        <li><a href="aboutus.php"><i class="fa fa-users"></i></a></li>
                    </ul>
                </div>
                </div> 
            </nav>
   
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3 style="color:#ffffff">rÂ·pe</h3></div></li>
            <li><span>Image 02</span><div><h3 style="color:#ffffff">mu·rd·er</h3></div></li>
            <li><span>Image 03</span><div><h3 style="color:#ffffff">th·eft</h3></div></li>
            <li><span>Image 04</span><div><h3 style="color:#ffffff">kid·nÂpp·ing</h3></div></li>
            <li><span>Image 05</span><div><h3 style="color:#ffffff">ri·ot</h3></div></li>
        </ul>
            <header>

				<p class="codrops-demos">
                                 <div id="banner-content">
                                     <h2 style="color:#ffffff">Report CRIME when noticed!</h2>
                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                     <a href="login.php" class="btn btn-danger btn-lg active">Report Now</a>
                                </div>
                                 

				</p>
            </header>


</body>
</html> 