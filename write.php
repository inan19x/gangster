<?php
session_start();
$uname=$_SESSION['uname'];
if(isset($_SESSION['member'])){
	$tid=$_REQUEST['tid'];
	include "konek.php";
	$sql="select topik from topik where tid='$tid'";
	$qry=mysqli_query($mysqli,$sql);
	$row=mysqli_fetch_array($qry);
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
	<link rel="stylesheet" type="text/css" href="allbody.css" />
	<div align="right"><a href="user.php?page=<?php echo $uname?>">My Profile | </a><a href="logout.php">Logout: <?php echo $uname?>&nbsp;</a></div>
	<center><br><br>
	<form method="post" action="pwrite.php">
	New post in topic "<?php echo $row['topik']?>"<br>
	<textarea name="isi" cols="70" rows="10" style="width:800px;"></textarea><br>
	<input type="hidden" name="tid" value="<?php echo $tid?>">
	<input type="hidden" name="author" value="<?php echo $uname?>">
	<input type="submit" value="Post!">
	</form>
	<a href="view.php?page=1">&lt;&lt;- Back</a><br><br>
	</div>
	<?php include "foot.php"; ?>
	</center>
	</center>
</body>
<?php
}
else{
	header("Location:sorry.php");
}
?>
