<?php
$con="mysql:host=localhost;dbname=nk";
$pd=new PDO($con,"root","");
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="SELECT * from login WHERE email='$email'";

try{
$res=$pd->query($sql);

if($row=$res->fetch())
{
if($pass==$row['password'])
{
	session_start();
$_SESSION['name']=$row['fname']." ".$row['lname'];
echo "<script>window.location.href='homepage.php'; </script>";
}
else
{
	echo "<script>alert('Email and Password is not matched'); window.location.href='index.html';</script>";
}
}
else{
	echo "<script>alert('No Record found Plz SignUp'); window.location.href='index.html';</script>";
}
}
catch(Exception $e)
{
	echo $e;
}
?>