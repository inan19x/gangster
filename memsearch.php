<div style="background-color:#f0f0ff;width:500px;padding-top:20px;padding-bottom:20px;">
	<form method="post" action="member.php">
	Search by: <select name="cari"><option value="uname">name</option><option value="email">email</option></select>
	<input type="text" name="dicari" > <input type="submit" value="find..." >
	</form>
	<?php
	$cari="";
	if($cari!=""){
		$cari=$_POST['cari'];	
		$dicari=$_POST['dicari'];
		include "konek.php";
		$atu="select * from member where $cari='$dicari'";
		$ua=mysqli_query($mysqli,$atu);
		$iga=mysqli_fetch_array($ua);
		$papat=mysqli_num_rows($ua);
		if(($dicari=="") or ($papat==0)){
			echo "user tidak ditemukan!";
		}
		else{
			echo "<table><tr><td valign='top' align='center'><a href='user.php?page=$iga[uname]'><img src='foto_galeri/uploads/$iga[poto].jpg' width='40' height='30'></a></td>";
			echo "<td valign='top'>$iga[uname]<br><i>$iga[kata]</i></td></tr></table>";		
		}
	}
	else{
		echo "Insert name/email of user you want to search";
	}
	?>
</div>
