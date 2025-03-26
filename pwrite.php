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
	$isi=mysqli_real_escape_string($mysqli,$isi);
	$sql="insert into isitopik(tid, isi, dari) values('$tid', '$isi', '$author')";
	$qry=mysqli_query($mysqli,$sql);
	$sql2="update topik set darilast='$author', tgllast='$today' where tid='$tid'";
	$qry2=mysqli_query($mysqli,$sql2);
	$sqltopik="select topik from topik where tid='$tid'";
	$qrytopik=mysqli_query($mysqli,$sqltopik);
	$rowtopik=mysqli_fetch_array($qrytopik);
	$topik=$rowtopik['topik'];
	$trx="insert into aktivitas (html) values ('<tr><td valign=\"top\" bgcolor=\"#f0f0f0\" width=\"50\"><img src=\"foto_galeri/uploads/$author.jpg\" width=\"50\" /></td><td valign=\"top\" bgcolor=\"#f0f0f0\"><a href=\"user.php?page=$author\">$author</a> replied to a thread <a href=\"viewforum.php?tid=$tid\">$topik</a>: <blockquote>$isi</blockquote></td></tr>')";
	$qtrx=mysqli_query($mysqli,$trx);
	header("Location:viewforum.php?tid=$tid");
}
?>
