<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');

if(!empty($username)){
if(!empty($password)){

session_start();

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="sigup";
$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);


	$sql="select * from users where uname='$username';";
	$result=mysqli_query($conn,$sql);
	$resultcheck=mysqli_num_rows($result);
		if($resultcheck>0)
		{
		$row=mysqli_fetch_assoc($result);
			if($password==$row['PASS'])
				{$_session['username']=$username;
				header("Location: bikeovercar.htm");
					}
			else{echo "<script>alert('wrong password')</script>";}
		}
		else{
			echo "<script>alert('Invalid Password or Username')</script>";
    			exit();
				
		}
	
	

}else{echo "<script>alert('Enter the Password')</script>";}
}else{echo "<script>alert('Enter the Username')</script>";}