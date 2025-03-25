<?php
session_start();
$uname=$_POST['dari'];
$untuk=$_POST['untuk'];

if(!isset($_SESSION['member']) or ($uname=="") or ($untuk=="")){
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
	<title>Gangster Site: Testimonial and Comment</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css" />
</head>
<body link="#4e5d9d" vlink="#4e5d9d" alink="#4e5d9d"><br><br>
	<center>
	<?php include "head.php"; ?>
	<div class="bingkai" id="home">
		<div align="right"><a href="user.php?page=<?php echo$uname?>">My Profile | </a><a href="logout.php">Logout: <?php echo $uname?></a>&nbsp;</div>
		<form method="post" action="ptesti.php">
		<input type="hidden" size="300" name="dari" value="<?php echo $uname ?>" ><input type="hidden" size="300" name="untuk" value="<?php echo $untuk ?>" >
		Comment for <?php echo $untuk?>:<br><textarea name="isi" rows="2" cols="50"></textarea><br><input type="submit" value="Send..."><br>
		</form>
		<a href="user.php?page=<?php echo $untuk ?>" >&lt;&lt; Back</a><br><br><br><br>
		</div>
	</div>
	<?php include "foot.php"; ?>
	</center>
</body>
<?php
}
?>
</html>
