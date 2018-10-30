<?php
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');

if(!empty($name)){
if(!empty($email)){


$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="sigup";
$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);


$sql="insert into mail (name,email) values('$name','$email');";
$result=mysqli_query($conn,$sql);
echo "<script>alert('Thank you for Subscribing')</script>";

}else{echo "<script>alert('please enter your name')</script>";}
}else{echo "<script>alert('please enter your email')</script>";}
