<?php
session_start();
?>
<html>
<head>
	<title>Gangster Site: About</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css" />
</head>
<body link="#4e5d9d" vlink="#4e5d9d" alink="#4e5d9d"><br><br>
	<center>
	<?php include "head.php"; ?>
	<div class="bingkai" id="index">
	<?php
	if(isset($_SESSION['member']) && ($_SESSION['uname'])){
		$uname=$_SESSION['uname'];
		echo "<div align='right'><a href='user.php?page=$uname'>My Profile | </a><a href='logout.php'>Logout: $uname&nbsp;</a></div>";
	}
	?>
		<div align="center">
		<br><br><img src="logo.jpg" /><br>
		Gangster&trade; Social Media Platform<br>
		<sup><i>version 0.0.1</i></sup><br><br>
		<div style="background-color:#f5f5f5;width:500px;">
		<font color="#e5e5e5" size="8"><b>T_T&nbsp;&nbsp;&nbsp;-<sub>~</sub>-!&nbsp;&nbsp;&nbsp;^o^</b></font><br>
		<font color="#c0c0c0" size="4"><i>Lift up your social life!</i></font><br><br>
		</div>
		<br><br><br>
		</div>
	</div>
	<?php include "foot.php"; ?>
	</center>
</body>
</html>
