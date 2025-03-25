<?php
session_start();
$uname=$_SESSION['uname'];
$kata=$_POST['kata'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$mobilephone=$_POST['mobilephone'];
$school=$_POST['school'];
$kesibukan=$_POST['kesibukan'];
$deskripsi=$_POST['deskripsi'];
$kata=strip_tags($kata);
$email=strip_tags($email);
$alamat=strip_tags($alamat);
$mobilephone=strip_tags($mobilephone);
$school=strip_tags($school);
$kesibukan=strip_tags($kesibukan);
$deskripsi=strip_tags($deskripsi);

if(preg_match("/^.+@.+\..+$/", $email)){
	include "konek.php";
	$sql="update member set kata='$kata', email='$email', alamat='$alamat', mobilephone='$mobilephone', school='$school', kesibukan='$kesibukan', deskripsi='$deskripsi' where uname='$uname'";
	$qry=mysqli_query($mysqli,$sql);
}
header("Location:user.php?page=$uname");
?>
