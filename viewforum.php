<?php
session_start();
if(!isset($_SESSION['uname'])){
	header("Location:sorry.php");
}
else{
	$uname=$_SESSION['uname'];
	include "konek.php";
	$x="select * from member where uname='$uname';";
	$y=mysqli_query($mysqli,$x);
	$z=mysqli_fetch_array($y);
	if($z['poto']=='default'){
		$foto='default';
	}
	else{
		$foto=$z['poto'];
	}
}
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
	<?php
	if(isset($_SESSION['member'])){
		echo "<div align='right'><a href='user.php?page=$uname'>My Profile | </a><a href='logout.php'>Logout: $uname&nbsp;</a></div>";
	}
	if(isset($_GET['tid'])){
		$tid=$_GET['tid'];
	}
	else{
		$tid=1;
	}
	$sql="select * from isitopik where tid='$tid' order by tisi desc";
	$qry=mysqli_query($mysqli,$sql);
	$sql2="select topik from topik where tid='$tid'";
	$qry2=mysqli_query($mysqli,$sql2);
	$row2=mysqli_fetch_array($qry2);
	echo "<br><big>Thread: ".$row2['topik']."</big><br>";
	echo "<a href=\"view.php?page=1\">&lt&lt- Back</a><br><br>";
	?>
	<table align="center" style="font-size:23px;" width="750">
	<tr><td bgcolor="#c0c0c0" colspan="2"></tr>
	<?php
	while($row=mysqli_fetch_array($qry)){
		$x="select poto from member where uname='$row[dari]'";
		$y=mysqli_query($mysqli,$x);$z=mysqli_fetch_array($y);
		echo "<tr><td valign='top' rowspan='2' width='100' align='center'><a href='user.php?page=".$row['dari']."'><img src='foto_galeri/uploads/$z[poto].jpg' width='100' height='80'></a></td>";
		echo "<td valign='top' width='650'><a href='user.php?page=".$row['dari']."'><u>".$row['dari']."</u></a> (<i>".$row['tgl']."</i>)<br>".$row['isi']."</td></tr>";
		echo "<tr><td align='right'><a href='write.php?tid=$tid'>[reply...]</a></td></tr>";
		echo "<tr><td bgcolor='#c0c0c0' colspan='2'></tr>";
	}
	?>
	</table>
	<br><br>
	</div>
	<?php include "foot.php"; ?>
	</center>
</body>
</html>
