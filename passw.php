<html>
<head>
<title>Gangster Site: Forgot Password</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="style.css" />
</head>
<body link="#4e5d9d" vlink="#4e5d9d" alink="#4e5d9d"><br><br>
	<center>
	<?php include "head.php"; ?>
	<div class="bingkai" id="index">
		<div align="center">
		<br><br><big>Password hint look-up</big><br>
		<sup>This form will provide you a password hint entered upon registration.</sup><br><br><br>
		<center><div style="background-color:#fff0f0;width:600px;padding-top:20px;padding-bottom:20px;">
		<form method="post" action="passw.php">
		Username/email : <input type="text" name="pelupa" > <input type="submit" value="Find..." >
		</form>
		<?php
		include "konek.php";
		if(isset($_POST['pelupa'])){
			$pelupa=$_POST['pelupa'];
		}
		else{
			$pelupa="";
		}
		$sql="select * from member where uname='$pelupa' or email='$pelupa'";
		$qry=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($qry);
		$jum=mysqli_num_rows($qry);
		if(($pelupa=="")or($jum==0)){
			echo "<center><i>Please input username/email</i></center>";
		}
		else{
			echo "hint for $pelupa:<br><i>$row[hint]</i>";
		}
		?>
		</div></center>
		<br><br>
		<a href="index.php">&lt;&lt; Back</a>
		<br><br><br>
		</div>
	</div>
	<?php include "foot.php"; ?>
	</center>
</body>
</html>
