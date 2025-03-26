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
	$kata=mysqli_real_escape_string($mysqli,$kata);
	$sql="update member set kata='$kata', email='$email', alamat='$alamat', mobilephone='$mobilephone', school='$school', kesibukan='$kesibukan', deskripsi='$deskripsi' where uname='$uname'";
	$qry=mysqli_query($mysqli,$sql);
}
if(isset($kata)){
	$trx="insert into aktivitas (html) values ('<tr><td valign=\"top\" bgcolor=\"#f0f0f0\" width=\"50\"><img src=\"foto_galeri/uploads/$uname.jpg\" width=\"50\" /></td><td valign=\"top\" bgcolor=\"#f0f0f0\"><a href=\"user.php?page=$uname\">$uname</a> just updated their shout out: <blockquote>$kata</blockquote></td</tr>')";
	$qtrx=mysqli_query($mysqli,$trx);
}
header("Location:user.php?page=$uname");
?>
