<?php
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$interest=$_POST['interest'];
	$email=$_POST['email'];
//Data base 

$conn = new mysqil('localhost','root','','Udhyam_loginpage');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into User_Profile(name,age,gender,interest,email)values(?,?,?,?,?)");
	$stmt->bind_param("sisss",$name,$age,$gender,$interest,$email);
	$stmt->execute();
	echo"User_Profile Successfully...";
	$stmt->close();
	$conn->close();
}