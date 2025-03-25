<div align="center">
<?php
include "konek.php";
$strSQL1 = "(select topik.darilast as dari, topik.topik as ke, topik.tgllast as tgl from topik) union (select testi.dari as dari, testi.untuk as ke, testi.tgl as tgl from testi) order by tgl desc limit 10;";
$qry = mysqli_query($mysqli,$strSQL1) or die (mysqli_error());
?>
<table width="700">
<tr><td bgcolor="#c1ceee" colspan="2">Last member activities</td></tr>
<?php
$tot=mysqli_num_rows($qry);
if($tot!=0){
	while($xz=mysqli_fetch_array($qry)){
		echo "<tr><td bgcolor='#f0f0f0' width='50'><img src=\"foto_galeri/uploads/".$xz['dari'].".jpg\" width=\"50\" height=\"35\" /></td><td bgcolor='#f0f0f0' valign='top'> <a href='user.php?page=".$xz['dari']."'> ".$xz['dari']."</a> posts to <i>".$xz['ke']."</i> on <i>".$xz['tgl']."</i></td></tr>";
	}
}
else{
	echo "<tr><td bgcolor='#f0f0f0' colspan='2'>";
	echo "No activity yet from any members...";
	echo "</td></tr>";
}
?>
</table>
</div>
