<?php
session_start();
if(isset($_SESSION['member'])){
	$uname=$_SESSION['uname'];
	include "konek.php";
	$sql="select * from member where uname='$uname';";
	$qry=mysqli_query($mysqli,$sql);
	$row=mysqli_fetch_array($qry);
}
?>
<html>
<head>
	<title>Gangster Site: Members</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css" />
</head>
<body link="#4e5d9d" vlink="#4e5d9d" alink="#4e5d9d"><br><br>
	<center>
	<?php include "head.php"; ?>
	<div class="bingkai" id="reg">
	<div align="center">
	<?php 
	if(isset($_SESSION['member']) && ($_SESSION['uname'])){
		echo "<div align='right'><a href='user.php?page=$uname'>My Profile | </a><a href='logout.php'>Logout: $uname</a>&nbsp;</div>";
		echo "<br>";
		include "allmember.php";
		echo "<br><br><br>";
	}
	else{
		header("Location:sorry.php");
	}
	?>
	</div>
	</div>
	<?php include "foot.php"; ?>
	</center>
</body>
</html>
