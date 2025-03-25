<?php
session_start();
if(!isset($_SESSION['member'])){
	header("Location:error.php");
}
else{
	$uname=$_POST['dari'];
	$untuk=$_POST['untuk'];
	$isi=$_POST['isi'];
}
if(($untuk=="")or($isi=="")){
	header("Location:error.php");
}
else{
	$isi=strip_tags($isi);
	include "konek.php";
	$sql="insert into testi(dari, isi, untuk) values('$uname','$isi','$untuk')";
	$qry=mysqli_query($mysqli,$sql);
	header("Location:user.php?page=$untuk");
}
?>
