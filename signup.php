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
			echo "<div style='background-color:#e5e5ff;padding-left:10px;width:500px;'>";
			echo "<form method='post' action='psignup.php'><br>";
			echo "<table>";
			echo "<tr><td valign='top'>Desired username *<br><font size='1'><i>username is permanent!</i></font></td><td valign='top'><input name='uname' type='text' maxlength='20' ></td></tr>";
			echo "<tr><td>Password</td><td><input name='passwd' type='password' maxlength='20' ></td></tr>";
			echo "<tr><td valign='top'>Password hint<br><font size='1'><i>Do not put your password here</i></font></td><td valign='top'><input name='hint' type='text' maxlength='100' ></td></tr>";
			echo "<tr><td>Email *</td><td><input name='email' type='text' maxlength='50' ></td></tr>";
			echo "<tr><td valign='top'>Keyword to register * <i>Yes, i am a... </i><br><font size='1'><i>Please type-in the magic keyword...</i></font></td><td valign='top'><input name='key' type='text' maxlength='50' ><br><img src='logo.jpg'></td></tr>";
			echo "<tr><td colspan='2' align='right'><input type='submit' value='Register...' ></td></tr>";
			echo "</table><br><br>";
			echo "<a href='index.php'>&lt;&lt; I have registered.</a>";
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
