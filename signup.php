<html>
<head>
	<title>Gangster Site: Register</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css" />
</head>
<body link="#4e5d9d" vlink="#4e5d9d" alink="#4e5d9d"><br><br>
	<center>
	<?php include "head.php"; ?>
	<div class="bingkai" id="reg">
		<div align="left">
		<br><br>
		<?php
		if(!isset($_SESSION['member'])){
			echo "<div style='background-color:#f0fff0;padding-left:10px;width:600px;'>";
			echo "<form method='post' action='psignup.php'><br>";
			echo "<table width='600' border='0'>";
			echo "<tr><td valign='top'>Desired username<br><font size='1'><i>Username is permanent!</i></font></td><td valign='top'><input name='uname' type='text' maxlength='20' style='width:300px;'></td></tr>";
			echo "<tr><td>Password</td><td><input name='passwd' type='password' maxlength='20' style='width:300px;'></td></tr>";
			echo "<tr><td valign='top'>Password hint<br><font size='1'><i>Do not put your password here</i></font></td><td valign='top'><input name='hint' type='text' maxlength='100' style='width:300px;'></td></tr>";
			echo "<tr><td>Email</td><td><input name='email' type='text' maxlength='50' style='width:300px;'></td></tr>";
			echo "<tr><td valign='top'>Keyword<font size='1'><br><i>Please type-in the magic keyword...</i><br><img src='logo.jpg'></font></td><td valign='top'><input name='key' type='text' maxlength='50' style='width:300px;'></td></tr>";
			echo "<tr><td>&nbsp;</td><td><input type='submit' value='Register!' style='width:250px;'></td></tr>";
			echo "</table><br><br>";
			echo "<a href='index.php'>&lt;&lt; I have registered</a>";
			echo "</form>";
			echo "<br></div>";
		}
		?>
		<br><br>
		</div>
	</div>
	<?php include "foot.php"; ?>
	</center>
</body>
</html>
