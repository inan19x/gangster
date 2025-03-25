<?php
session_start();
$uname=$_SESSION['uname'];
$target_path = "foto_galeri/uploads/";
$target_path = $target_path . $_SESSION['uname'].".jpg";
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
	include "konek.php";
	$sql="update member set poto='$uname' where uname='$uname'";
	$qry=mysqli_query($mysqli,$sql);
	header("Location: user.php?page=$uname");
}
else{
	header("Location: error.php");
}
?>
