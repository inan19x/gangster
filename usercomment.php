<?php
include "konek.php";
$sql="select * from testi where untuk='$view' order by id desc limit 10";
$qry=mysqli_query($mysqli,$sql);
if(isset($hal)){	
	$hal = $_REQUEST['page'];
}
else{
	$hal = 1;
}
$batas = ($hal - 1) * 5;
$strSQL1 = "select * from testi where untuk='$view' order by id desc limit $batas,5";
$strSQL2 = "Select * from testi where untuk='$view'";
$qry = mysqli_query($mysqli,$strSQL1) or die (mysqli_error());
$tot = mysqli_query($mysqli,$strSQL2) or die (mysqli_error());
$jml = mysqli_num_rows($tot);
$kel = $jml/5;
if ($kel==floor($jml/5)){
	$page = $kel;
} 
else{
	$page = floor($jml/5)+1;
}
$pct = 100/($page+4);
?>
<table width="530">
	<tr><td bgcolor="#c0c0c0" colspan="2"></tr>
	<?php
	while($row=mysqli_fetch_array($qry)){
		$x="select poto from member where uname='$row[dari]'";
		$y=mysqli_query($mysqli,$x);$z=mysqli_fetch_array($y);
		echo "<tr><td width='30' valign='top' align='center'><a href='user.php?page=".$row['dari']."'><img src='foto_galeri/uploads/$z[poto].jpg' width='30' height='25'></a></td>";
		echo "<td width='500' valign='top' bgcolor='#e5e5e5'><sup><u>".$row['dari']."</u> (".$row['tgl'].")<br>".$row['isi']."</sup></td></tr>";
		echo "<tr><td bgcolor='#c0c0c0' colspan='2'></tr>";
	}
	?>
</table>
<?php
if($jml>5){
	echo "<table align='center'><tr>";
	$lebar=$pct*2;
	$prev=$hal-1;
	$next=$hal+1;
	echo "<TD WIDTH=$lebar"."%>";
	if ($hal!=1) {
		echo "<A HREF='user.php?page=$view&page=$prev'><sub>&lt;&lt; Prev</sub></A>";
	}
	else {
		echo "<sub>&lt;&lt; Prev</sub>";
	}
	echo "</TD>";
	echo "<TD WIDTH=$lebar"."%>";
	if ($hal!=$page) {
		echo "<A HREF='user.php?page=$view&page=$next'><sub>Next &gt;&gt;</sub></A>";
	}
	else {
		echo "<sub>Next &gt;&gt;</sub>";
	}
	echo "</TD>";
	echo "</tr></table>";
}
?>
