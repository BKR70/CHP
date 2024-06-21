<?php
require "dbcon.php";
if(isset($_POST['reg']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$nid=$_POST['nid'];

	$district=$_POST['district'];
	$upazila=$_POST['upazila'];
	$unions=$_POST['unions'];
	
	
	$ward=$_POST['ward'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$q= "select * from peoples where email='$email'";
	$result=mysqli_query($con,$q);
	if(mysqli_num_rows($result))
	{
		echo "Try Another user Name";
	}
	else{

		mysqli_query($con,"INSERT INTO peoples (firstname,lastname,nid,district,upazila,unions,ward,gender,phone,address,email,password) VALUES ('$firstname','$lastname','$nid','$district','$upazila','$unions','$ward','$gender','$phone','$address','$email','$password')") or die("".mysqli_error());
		echo "Success";
	}
	
}
?>