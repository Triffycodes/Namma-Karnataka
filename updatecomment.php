<?php
session_start();
$place=$_POST['place'];
$cmt=$_POST['cmnt'];
$cmt=trim($cmt);
$user=$_SESSION['name'];
if($cmt=="")
{
echo "<script> window.location.href='eg.php';alert('Please Write comment');</script>";
exit();
}
$con="mysql:host=localhost;dbname=nk";
$pd=new PDO($con,"root","");
$sql="INSERT INTO comment(place,user,cmt) VALUES ('$place','$user','$cmt')";
$res=$pd->query($sql);
echo "<script> window.location.href='eg.php';alert('Thank You for Your Comment');</script>";

?>