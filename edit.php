<?php
session_start();
$uname=$_SESSION['uname'];

if(!isset($_SESSION['member']))
	{header("Location:sorry.php");}
else{
include "konek.php";
$sql="select * from member where uname='$uname';";
$qry=mysqli_query($mysqli,$sql);
$row=mysqli_fetch_array($qry);
?>
<html>
<head>
<title>Gangster Site: Edit</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="style.css" />
</head>
<body link="#4e5d9d" vlink="#4e5d9d" alink="#4e5d9d"><br><br>
	<center>
	<?php include "head.php"; ?>
	<div class="bingkai" id="home">
		<div align="right"><a href='user.php?page=<?php echo $uname?>'>My Profile | </a><a href="logout.php">Logout: <?php echo $uname?></a>&nbsp;</div><br><br>
	<form method="post" action="pedit.php">
	<table align="center">
		<tr><td>Shoutout</td><td><input name="kata" value="<?php echo $row['kata']?>" type="text" maxlength="255"></td></tr>
		<tr><td valign="top">Email</td><td><input valign="top" name="email" value="<?php echo $row['email']?>" type="text"></td></tr>
		<tr><td>Address</td><td><input name="alamat" value="<?php echo $row['alamat']?>" type="text" maxlength="100"></td></tr>
		<tr><td>Mobile Phone</td><td><input name="mobilephone" value="<?php echo $row['mobilephone']?>" type="text" maxlength="20"></td></tr>
		<tr><td>Work</td><td><input name="school" value="<?php echo $row['school']?>" type="text" maxlength="100"></td></tr>
		<tr><td>Title</td><td><input name="kesibukan" value="<?php echo $row['kesibukan']?>" type="text" maxlength="20"></td></tr>
		<tr><td valign="top">About Me</td><td valign="top"><input name="deskripsi" value="<?php echo $row['deskripsi']?>" type="text" maxlength="255"></td></tr>
		<tr><td colspan="2" align="right"><input type="submit" value="Update..."></td></tr>
	</table>
	</form>
	
	<div style="border-style:none;width:300px;background-color:#f4b4b4;">
	<form method="post" action="updpasswd.php">
	<table>
		<tr><td>Change password</td><td><input valign="top" name="passwd" type="password"></td></tr>
		<tr><td>Password hint</td><td><input name="hint" type="text"></td></tr>
		<tr><td colspan="2" align="right"><input type="submit" value="Change password..."></td></tr>
	</table>
	</form>
	</div>
		
	<?php
	echo "<a href=\"user.php?page=$uname\">&lt;&lt; Back</a>";
	?>
	
	<br><br><br><br>
	</div>
	<?php include "foot.php"; ?>
	</center>
</body>
</html>
<?php
}
?>
