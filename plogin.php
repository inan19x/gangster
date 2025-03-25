<?php
$email=$_POST['email'];
$passwd=md5($_POST['passwd']);

if($email==""){
	header("Location: error.php");
}
else{
	include "konek.php";
	$sql="select * from member where email='$email'";
	$qry=mysqli_query($mysqli,$sql);
	$row=mysqli_fetch_array($qry);
	if($passwd==$row['passwd']){
		session_start();
		$_SESSION['member']=1;
		$_SESSION['uname']=$row['uname'];
		header("Location: home.php");
	}
	else{
		header("Location:error.php");
	}
}
?>
