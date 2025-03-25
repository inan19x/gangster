<div align="center">
<?php
include "konek.php";
if(!isset($hal)){
	$hal="1";
}else{
	$hal = $_REQUEST['page'];
}
if($hal==""){
	$hal=1;
}
$batas = ($hal - 1) * 10;
$strSQL1 = "select * from member order by uname limit $batas,10";
$strSQL2 = "select * from member order by uname";
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
		<table><caption><?php echo "total $jml user(s)"; ?>
		<tr><td bgcolor="#c1ceee">Username</td><td bgcolor='#c1ceee' width="400">Shout out</td></tr>
		<?php
		while($xz=mysqli_fetch_array($qry)){
			echo "<tr><td bgcolor='#f0f0f0'><a href='user.php?page=".$xz['uname']."'>".$xz['uname']."</a></td>";
			echo "<td bgcolor='#e5e5e5'><i>".$xz['kata']."</i></td></tr>";
		}
		?>
		</table>
<?php
if($jml>10){
	echo "<table><tr>";
	$lebar=$pct*2;
	$prev=$hal-1;
	$next=$hal+1;
	echo "<TD WIDTH=$lebar"."%>";
	if ($hal!=1) {
		echo "<A HREF='member.php?mod=all&page=$prev'><sub>&lt;&lt; Prev</sub></A>";
	}
	else {
		echo "<sub>&lt;&lt; Prev</sub>";
	}
	echo "</TD>";
	echo "<TD WIDTH=$lebar"."%>";
	if ($hal!=$page) {
		echo "<A HREF='member.php?mod=all&page=$next'><sub>Next &gt;&gt;</sub></A>";
	}
	else {
		echo "<sub>Next &gt;&gt;</sub>";
	}
	echo "</TD>";
	echo "</tr></table>";
}
?>
</div>
