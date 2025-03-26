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
	$sql="insert ignore into member (uname, passwd, hint, email, kata, poto) values('$uname','$passwd','$hint','$email','...','$uname')";
}
$qry=mysqli_query($mysqli,$sql);
$trx="insert into aktivitas (html) values ('<tr><td valign=\"top\" bgcolor=\"#f0f0f0\" width=\"50\"><img src=\"foto_galeri/uploads/$uname.jpg\" width=\"50\" /></td><td valign=\"top\" bgcolor=\"#f0f0f0\">Please welcome <a href=\"user.php?page=$uname\">$uname</a> just registered to Gangster site!</td</tr>')";
$qtrx=mysqli_query($mysqli,$trx);
$file = "foto_galeri/uploads/default.jpg";
$newfile="foto_galeri/uploads/$uname.jpg";
copy($file, $newfile);
header("Location:thx.php");
?>
