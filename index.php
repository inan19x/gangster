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
		echo "<sup>Simple social network platform. Lift up your social life!</sup><br><br>";
		echo "<div style='background-color:#e5e5ff;padding-left:10px;width:300px;'>";
		echo "<form method='post' action='plogin.php'><br>";
		echo "<table>";
		echo "<tr><td>Email&nbsp;&nbsp;&nbsp;</td><td><input name='email' type='text' ></tr>";
		echo "<tr><td>Password</td><td><input name='passwd' type='password' maxlength='20' ></tr>";
		echo "<tr><td colspan='2' align='right'><input type='submit' value='Login...' ></td></tr>";
		echo "</table>";
		echo "<br><a href='signup.php'>Register here&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href='passw.php'>Forgot password?</a><br>";
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
