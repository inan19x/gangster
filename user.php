<?php
session_start();
if(!isset($_SESSION['uname'])){
	header("Location:sorry.php");
}
else{
	$view=$_REQUEST['page'];
	if($view==""){
		header("Location:error.php");
	}
	else{
		include "konek.php";
		$x="select poto from member where uname='$view'";
		$y=mysqli_query($mysqli,$x);$z=mysqli_fetch_array($y);
		$sql="select * from member where uname='$view';";
		$qry=mysqli_query($mysqli,$sql);
		$row=mysqli_fetch_array($qry);
	}
?>
<html>
<head>
	<title>Gangster Site: Profil <?php echo $view?></title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css" />
</head>
<body link="#4e5d9d" vlink="#4e5d9d" alink="#4e5d9d"><br><br>
	<center>
	<?php include "head.php"; ?>
	<div class="bingkai" id="home">
		<?php
		if(isset($_SESSION['member']) && ($_SESSION['uname'])){
			$uname=$_SESSION['uname'];
			echo "<div align='right'><a href='user.php?page=$uname'>My Profile | </a><a href='logout.php'>Logout: $uname</a>&nbsp;</div>";
		}
		?>
		<div align="left" style="padding-left:30px;">
		<br><br>
		<table>
		<tr><td rowspan="3" valign="top" width="150"><img src="foto_galeri/uploads/<?php echo $z['poto']?>.jpg" width="120" height="100" ><br>
		<a href="foto_galeri/uploads/<?php echo $view?>.jpg" target="_blank"><sup>See original</sup></a></td>
		<td width="250" align="right">
		<div style="border:1px #333333 dotted;font-size:11px;background-color:#e5e5e5;padding:5px;" align="left">&quot;<i><?php echo $row['kata']?></i>&quot;</div>
                <?php
                if ($view==$uname){
                ?>
                <form method="post" action="edit.php">
		<input name="uname" type="hidden" value="<?php echo $uname?>" ><input type="submit" value="Edit info.." />
		</form>
                <?php
                }
                ?>
		</td></tr>
		<tr><td valign="bottom">
		<b><?php echo $row['uname']?></b>
		</td></tr>
		<tr><td valign="top"><img src="mail.png" width="15" height="10" /> <?php echo $row['email']?></td></tr>
		<?php 
		if ($view==$uname){
		?>
		<tr><td colspan="2">
		<form enctype="multipart/form-data" action="uploader.php" method="POST">
		<input type="hidden" name="MAX_FILE_SIZE" value="200000" >
		<input style="width=300px;" name="uploadedfile" type="file" ><br><input type="submit" value="Upload photo!" ><br><sub>*.jpg file only! MAX 200 KB</sub>
		</form>
		</td></tr>
		<?php
		}
		?>
		</table><br>
		<div style='padding-left:10px;'>
		<?php
		if($row['alamat']!=""){echo "<b><u>Address</u></b><br>$row[alamat]<br>";}
		if($row['mobilephone']!=""){echo "<b><u>Mobile Phone</u></b><br>$row[mobilephone]<br>";}
		if($row['school']!=""){echo "<b><u>Work</u></b><br>$row[school]<br>";}
		if($row['kesibukan']!=""){echo "<b><u>Title</u></b><br>$row[kesibukan]<br>";}
		if($row['deskripsi']!=""){echo "<b><u>About Me</u></b><br>$row[deskripsi]";}
		?>
		<br><br>
		</div><br>
		Comment for <?php echo $view ?>:<br>
		<form method="post" action="testi.php">
                <?php
                echo "<input type='hidden' name='dari' value='$uname'>";
                echo "<input type='hidden' name='untuk' value='$view'>";
                echo "<input style='background-color:#c0c0ff;' type='submit' value='Add comment..'>";
		?>
		</form>
		<?php
		include "usercomment.php";
		?>
		<br><br>
		</div>
	</div>
	<?php include "foot.php"; ?>
	</center>
</body>
</html>
<?php
}
?>
