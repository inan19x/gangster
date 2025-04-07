<?php
session_start();
if(!isset($_SESSION['member'])){
	header("Location:error.php");
}
else{
	$topik=$_POST['topik'];
	$author=$_POST['author'];
	$isi=$_POST['isi'];
}
$isi=nl2br($isi);
if(($topik=="")or($isi=="")){
	header("Location:error.php");
}
else{
	$isi=strip_tags($isi, '<b><i><u><br/><br>');
	$topik=strip_tags($topik);
	include "konek.php";
	$isi=mysqli_real_escape_string($mysqli,$isi);
	$topik=mysqli_real_escape_string($mysqli,$topik);
	$sql="select * from topik";
	$qry=mysqli_query($mysqli,$sql);
	$tot=mysqli_num_rows($qry);
	if($tot==0){
		$tid=1;
	}
	else{
		$tid=$tot+1;
	}
	$sql2="insert into topik(tid,topik,author,darilast) values('$tid','$topik','$author','$author')";
	$qry2=mysqli_query($mysqli,$sql2);
	$sql3="insert into isitopik(tid,isi,dari) values('$tid', '$isi', '$author')";
	$qry3=mysqli_query($mysqli,$sql3);
	$trx="insert into aktivitas (html) values ('<tr><td valign=\"top\" bgcolor=\"#f0f0f0\" width=\"50\"><img src=\"foto_galeri/uploads/$author.jpg\" width=\"50\" /></td><td valign=\"top\" bgcolor=\"#f0f0f0\"><a href=\"user.php?page=$author\">$author</a> posts a new thread <a href=\"viewforum.php?tid=$tid\">$topik</a>: <blockquote>$isi</blockquote></td></tr>')";
	$qtrx=mysqli_query($mysqli,$trx);
	header("Location:view.php?page=1");
}
?>
