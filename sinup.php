 <?php

$name=filter_input(INPUT_POST,'name');
$phone=filter_input(INPUT_POST,'ph');
$uname=filter_input(INPUT_POST,'uname');
$pass=filter_input(INPUT_POST,'pass');


if(!empty($name)){
if(!empty($phone)){
if(!empty($uname)){
if(!empty($pass)){


$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="sigup";
$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);


	$sql="select * from users where uname='$uname';";
	$result=mysqli_query($conn,$sql);
	$resultcheck=mysqli_num_rows($result);
		if($resultcheck>0)
		{
		echo"<script> alert('please enter another username')</script>";
		//header("Location: signnup.php?signup=usertaken");
    		exit();
		}	
		else{      
     		$sql="insert into users(name,phone,uname,pass) values('$name','$phone','$uname','$pass');";
		mysqli_query($conn,$sql);
		echo"<script> alert('congratulations you have successfully opened an account')</script>";
		exit();

		}		
}else{echo"<script>alert('please enter the password')</script>";}
} else{echo"<script>alert('please enter the username')</script>";}
}else{echo"<script>alert('please enter your phone number')</script>";}
}else{echo"<script>alert('please enter your name')</script>";}
?>