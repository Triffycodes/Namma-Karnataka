<?php
$con="mysql:host=localhost;dbname=nk";
$pd=new PDO($con,"root","");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
try
{
if($pass!=$cpass)
{
	echo "<script>alert('Password is not matched'); window.location.href='index.html';</script>";
	exit();
}
$sql="INSERT INTO login(fname, lname, email, password) VALUES ('$fname','$lname','$email','$pass') ";
$res=$pd->query($sql);
echo "<script>alert('Your Successfuly signed up ... PLEASE LOGIN'); window.location.href='index.html';</script>";
}
catch(Exception $e)
{
	echo $e;
	echo "<script>alert('Email is already Used'); window.location.href='index.html';</script>";
}
?>