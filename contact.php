<?php
$topic=filter_input(INPUT_POST,'topic');
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');

if(!empty($topic)){
if(!empty($name)){
if(!empty($email)){

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="sigup";
$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);


$sql="insert into contacts (topic,name,email) values('$topic','$name','$email');";
$result=mysqli_query($conn,$sql);
echo "<script>alert('submitted successfully')</script>";
//header("Location: contact.htm");
				




}else{echo "<script>alert('Enter the Email')</script>"; }//header("Location: contact.htm");}
}else{echo "<script>alert('Enter the Name')</script>"; }//header("Location: contact.htm");}
}else{echo "<script>alert('Enter the Topic')</script>";}// header("Location: contact.htm");}

