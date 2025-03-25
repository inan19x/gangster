<?php
session_start();
$uname=$_SESSION['uname'];

if(!isset($_SESSION['member'])){
	header("Location:sorry.php");
}
else{
include "konek.php";
$sql="select * from member where uname='$uname';";
$qry=mysqli_query($mysqli,$sql);
$row=mysqli_fetch_array($qry);
?>
<html>
<head>
	<title>Gangster Site: Home</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css" />
</head>
<body link="#4e5d9d" vlink="#4e5d9d" alink="#4e5d9d"><br><br>
	<center>
	<?php include "head.php"; ?>
	<div class="bingkai" id="home">
	<div align="right"><a href='user.php?page=<?php echo $uname?>'>My Profile | </a><a href="logout.php">Logout: <?php echo $uname?></a>&nbsp;</div>
	<div align="center" style="padding-left:30px;">
	<br>
	<img src="logo.jpg" /><br>
	<?php include "feeds.php"; ?><br><br>
	</div>
	</div>
	<?php include "foot.php"; ?>
	</center>
</body>
</html>
<?php
}
?>
