<?php
$rate=$_POST['star'];
$place=$_POST['place'];	
if(!$rate)
{
echo "<script> window.location.href='eg.php';alert('Please select STAR');</script>";
exit();
}
$con="mysql:host=localhost;dbname=nk";
$pd=new PDO($con,"root","");
$sql="INSERT INTO rating (place,rate) VALUES ('$place','$rate')";
$res=$pd->query($sql);
echo "<script> window.location.href='eg.php';alert('Thank You for Your Rating');</script>";

?>