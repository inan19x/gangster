<?php
session_start();
$uname=$_SESSION['uname'];

if(isset($_SESSION['member'])){
	include "konek.php";
	$sql="select * from topik order by topik";
	$qry=mysqli_query($mysqli,$sql) or die (mysqli_error());
?>
<html>
<head>
	<title>Gangster Site: Forum</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css" />
</head>
<body link="#4e5d9d" vlink="#4e5d9d" alink="#4e5d9d"><br><br>
	<center>
	<?php include "head.php"; ?>
	<div class="bingkai" id="forum">
	<link rel="stylesheet" type="text/css" href="allbody.css" /><body>
	<div align="right"><a href="user.php?page=<?php echo$uname?>">My Profile | </a><a href="logout.php">Logout: <?php echo $uname?>&nbsp;</a></div>
	<center><br><br>
	<form method="post" action="pwritenew.php">
	Judul topik baru:<br>
	<input type="hidden" name="author" value="<?php echo $uname?>"><input type="text" name="topik" style="width:300px;" maxlength="50"><br><br>
	<textarea name="isi" cols="70" rows="10"></textarea><br>
	<input type="submit" value="Post ke Forum">
	</form>
	<a href="view.php?page=1">&lt;&lt;- Back</a><br><br>
	</div>
	<?php include "foot.php"; ?>
	</center>
</body>
<?php
}
else
{
header("Location:sorry.php");
}
?>
