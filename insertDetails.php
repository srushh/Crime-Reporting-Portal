<?php
/*
include 'connect.php';

$name= mysqli_real_escape_string($conn,$_POST['name']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$contact=mysqli_real_escape_string($conn,$_POST['contact']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

echo $name ." ".$city ." ".$email." ".$contact." ".$password."<br>";

$result= mysqli_query($conn,"INSERT INTO users(name,city,email,contact,password) VALUES('$name',$city','$email','$contact','$password')");

echo $name . "'s details added!";
mysql_close($conn);
*/

$link = mysqli_connect("localhost:3308","root","")  or die("cannot connect to server !!");
//mysqli_select_db("personal_info");
mysqli_select_db($link,"mysql");
if(isset($_REQUEST['submit']))
{
    $errorMessage = "";
$name=$_POST['name'];
$city=$_POST['city'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];


$check="SELECT * FROM users WHERE email = '$_POST[$email]'";
$rs = mysqli_query($link,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
    echo "User Already Exists<br/>";
}
 else {
            $insertTB="INSERT INTO `mysql`.`users`
        (`name`, `city`, `email`, `contact`, `password`) VALUES ('$name', '$city', '$email','$contact', '$password')";
        $result=mysqli_query($link,$insertTB) or die(mysqli_error($link));
        echo $name . "'s details added!";
    header("Location:http://localhost/DBMS/login.php");
}

}
?>



