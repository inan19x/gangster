<?php
$uname=$_POST['uname'];
$passwd=md5($_POST['passwd']);
$email=$_POST['email'];
$hint=$_POST['hint'];
$uname=strip_tags($uname);
$email=strip_tags($email);
$hint=strip_tags($hint);
$key=$_POST['key'];
if(($uname=="") or (!preg_match("/^.+@.+\..+$/", $email)) or ($key!="gangster")){
	header("Location:error.php");
}
else{
	include "konek.php";
	$sql="insert ignore into member (uname, passwd, hint, email, kata) values('$uname','$passwd','$hint','$email','...')";
}
$qry=mysqli_query($mysqli,$sql);
$file = "foto_galeri/uploads/default.jpg";
$newfile="foto_galeri/uploads/$uname.jpg";
copy($file, $newfile);
header("Location:thx.php");
?>
