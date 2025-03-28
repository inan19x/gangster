<div align="center">
<?php
include "konek.php";
$strSQL1 = "select html from aktivitas order by tgl desc limit 10;";
$qry = mysqli_query($mysqli,$strSQL1) or die (mysqli_error());
?>
<table width="750">
<tr><th colspan="2">Last member activities</th></tr>
<?php
$tot=mysqli_num_rows($qry);
if($tot!=0){
	while($xz=mysqli_fetch_array($qry)){
		echo $xz['html'];
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
