<?php
session_start();
?>
<html>
<head>
	<title>Gangster Site</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css" />
</head>
<body link="#4e5d9d" vlink="#4e5d9d" alink="#4e5d9d"><br><br>
	<center>
	<?php
	include "head.php";
	?>
	<div class="bingkai" id="index">
	<?php
	if(isset($_SESSION['member']) && ($_SESSION['uname'])){
		header("Location:home.php");
	}
	else{
		echo"<div align=\"left\">";
		echo "<img src=\"logo.jpg\" /><br>";
		echo "Simple social network platform. Lift up your social life!<br><br>";
		echo "<div style='background-color:#f0f0ff;padding-left:10px;width:500px;'>";
		echo "<form method='post' action='plogin.php'><br>";
		echo "<table width='500'>";
		echo "<tr><td>Email</td><td>:</td><td width='400'><input name='email' type='text' style='width:300px;'></td></tr>";
		echo "<tr><td>Password</td><td>:</td><td width='400'><input name='passwd' type='password' maxlength='20' style='width:300px;'></td></tr>";
		echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td width='400'><input type='submit' style='font-size:25px;width:300px;' value='Login...' ></td></tr>";
		echo "</table>";
		echo "<br><a href='signup.php'>Register <u>here</u></a><br><a href='passw.php'>Forgot password?</a><br>";
		echo "</form>";
		echo "<br></div>";
	}
	?>
	<br>
	</div>
	</div>
	<?php
	include "foot.php";
	?>
	</center>
</body>
</html>
