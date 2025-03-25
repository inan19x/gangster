<?php
session_start();
$uname=$_SESSION['uname'];
if(!isset($_SESSION['member'])){
	header("Location:sorry.php");
}
else{
	include "konek.php";
	$passwd=md5($_POST['passwd']);
	$hint=$_POST['hint'];
	$sql="update member set passwd='$passwd', hint='$hint' where uname='$uname'";
	mysqli_query($mysqli,$sql);
	header("Location:home.php");
}
?>
