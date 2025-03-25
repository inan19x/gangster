<?php
session_start();
if(isset($_SESSION['member'])){
	$uname=$_SESSION['uname'];
}
include "konek.php";
$hal = $_REQUEST['page'];
if($hal==""){
	$hal=1;
}
$batas = ($hal - 1) * 10;
$strSQL1 = "select * from topik order by tgllast desc limit $batas,10";
$strSQL2 = "Select * from topik";
$qry = mysqli_query($mysqli,$strSQL1) or die (mysqli_error());
$tot = mysqli_query($mysqli,$strSQL2) or die (mysqli_error());
$jml = mysqli_num_rows($tot);
$kel = $jml/10;
if ($kel==floor($jml/10)){
	$page = $kel;
} 
else{
	$page = floor($jml/10)+1;
}
$pct = 100/($page+4);
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
	else{
		header("Location:sorry.php");
	}
	?>
		<br><br><table style="border:solid 1px #c0c0c0;" align="center">
		<tr><th width="300" bgcolor="#f0f0f0">Thread Subject</th><th width="150" bgcolor="#f0f0f0">Author</th><th width="150" bgcolor="#f0f0f0">Last Posted</th></tr>
		<?php
		while ($row=mysqli_fetch_array($qry))
		{
		echo "<tr><td><a href=viewforum.php?tid=$row[tid]>$row[topik]</a></td><td><a href='user.php?page=$row[author]'>$row[author]</a></td><td><a href='user.php?page=$row[darilast]'>$row[darilast]</a><br><sup><i>$row[tgllast]</i></sup></tr>";
		}
		?>
		</table>
		Submit new thread? <a href="writenew.php">Click here</a>
		<br><br><br>
		<?php
	if($jml>10){
	echo "<table><tr>";
	$lebar=$pct*2;
	$prev=$hal-1;
	$next=$hal+1;
	echo "<TD WIDTH=$lebar"."%>";
	if ($hal!=1) {
		echo "<A HREF='view.php?page=$prev'>&lt;&lt; Prev</A>";
	} else {
		echo "&lt;&lt; Prev";
	}
	echo "</TD>";
	echo "<TD WIDTH=$lebar"."%>";
	if ($hal!=$page) {
		echo "<A HREF='view.php?page=$next'>Next &gt;&gt;</A>";
	} else {
		echo "Next &gt;&gt;";
	}
	echo "</TD>";
	echo "</tr></table>";
	}
	?>
		<br><br><br>
	</div>
	<?php include "foot.php"; ?>
	</center>
</body>
</html>
