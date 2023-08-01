<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	mysqli_query($db, "DELETE FROM tb_kriteria WHERE id_kriteria = '$_GET[id_kriteria]'");
	header("location:kriteria-fuzzy.php");
?>