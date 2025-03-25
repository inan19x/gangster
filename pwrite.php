<?php
session_start();
if(!isset($_SESSION['member'])){
	header("Location:error.php");
}
else{
	$author=$_POST['author'];
	$tid=$_POST['tid'];
	$isi=$_POST['isi'];
	$isi=nl2br($isi);
	$today=date("Y-m-d G:i:s");
}
if($isi==""){
	header("Location:error.php");
}
else{
	$isi=strip_tags($isi, '<b><i><u><br/><br>');
	include "konek.php";
	$sql="insert into isitopik(tid, isi, dari) values('$tid', '$isi', '$author')";
	$qry=mysqli_query($mysqli,$sql);
	$sql2="update topik set darilast='$author', tgllast='$today' where tid='$tid'";
	$qry2=mysqli_query($mysqli,$sql2);
	header("Location:viewforum.php?tid=$tid");
}
?>
