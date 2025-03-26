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
	$isi=mysqli_real_escape_string($mysqli,$isi);
	$sql="insert into testi(dari, isi, untuk) values('$uname','$isi','$untuk')";
	$qry=mysqli_query($mysqli,$sql);
	$trx="insert into aktivitas (html) values ('<tr><td valign=\"top\" bgcolor=\"#f0f0f0\" width=\"50\"><img src=\"foto_galeri/uploads/$uname.jpg\" width=\"50\" /></td><td valign=\"top\" bgcolor=\"#f0f0f0\"><a href=\"user.php?page=$uname\">$uname</a> posts a comment to <a href=\"user.php?page=$untuk\">$untuk</a>\'s page: <blockquote>$isi</blockquote></td></tr>')";
	$qtrx=mysqli_query($mysqli,$trx);
	header("Location:user.php?page=$untuk");
}
?>
