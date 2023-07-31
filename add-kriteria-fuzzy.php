<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	if (isset($_POST['button']))
	{
		mysqli_query($db, "INSERT INTO kriteria_fuzzy(id_kriteria_fuzzy, nama_kriteria_fuzzy, batas_bawah, batas_tengah, batas_atas, nama_bawah, nama_tengah, nama_atas) VALUES('$_POST[id_kriteria_fuzzy]', '$_POST[nama_kriteria_fuzzy]', '$_POST[batas_bawah]', '$_POST[batas_tengah]', '$_POST[batas_atas]', '$_POST[nama_bawah]', '$_POST[nama_tengah]', '$_POST[nama_atas]')");
		header("location:kriteria-fuzzy.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPK Destinasi Wisata Metode AHP Database</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Georgia, Times New Roman, Times, serif;
	font-size: 13px;
	color: #333333;
}
.style1 {
	color: #000099;
	font-size: 24px;
}
a:link {
	text-decoration: none;
	color: #333333;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: underline;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #333333;
}
.style2 {font-weight: bold}
-->
</style></head>

<body>
<table width="1000" border="0" align="center" cellpadding="7" cellspacing="1" bgcolor="#000099">
  <tr>
    <td height="50" bgcolor="#FFFFFF" align="center"><span class="style1">SPK Destinasi Wisata Metode AHP Database</span></td>
  </tr>
  <tr>
    <td height="35" bgcolor="#FFFFFF"><span class="style2"><a href="admin.php">Home</a> | <a href="alternatif.php">Alternatif</a> | <a href="kriteria-fuzzy.php">Kriteria AHP</a> | <a href="nilai-fuzzy.php">Nilai Fuzzy</a> | <a href="logout.php">Logout</a></span></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF"><br />
      <strong>Tambah Data Kriteria AHP</strong><br />
      <br />
      <form id="form1" name="form1" method="post" action="">
        <table width="350" border="0" cellpadding="5" cellspacing="1" bgcolor="#000099">
          <tr>
            <td width="128" bgcolor="#FFFFFF">ID Kriteria AHP</td>
            <td width="249" bgcolor="#FFFFFF"><input type="text" name="id_kriteria_fuzzy" id="id_kriteria_fuzzy" /></td>
          </tr>
          <tr>
            <td width="128" bgcolor="#FFFFFF">Nama Kriteria AHP</td>
            <td width="249" bgcolor="#FFFFFF"><input type="text" name="nama_kriteria_fuzzy" id="nama_kriteria_fuzzy" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">Batas Bawah</td>
            <td bgcolor="#FFFFFF"><input type="text" name="batas_bawah" id="batas_bawah" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">Batas Tengah</td>
            <td bgcolor="#FFFFFF"><input type="text" name="batas_tengah" id="batas_tengah" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">Batas Atas</td>
            <td bgcolor="#FFFFFF"><input type="text" name="batas_atas" id="batas_atas" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">Nama Bawah</td>
            <td bgcolor="#FFFFFF"><input type="text" name="nama_bawah" id="nama_bawah" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">Nama Tengah</td>
            <td bgcolor="#FFFFFF"><input type="text" name="nama_tengah" id="nama_tengah" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">Nama Atas</td>
            <td bgcolor="#FFFFFF"><input type="text" name="nama_atas" id="nama_atas" /></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
            <td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Simpan" /></td>
          </tr>
        </table>
      </form>
      <br />
    <br /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td width="47%" height="35" align="left"><strong>&copy; Kelompok 5</strong></td>
        <td width="53%" height="35" align="right"><strong> Logika Informatika 2021</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
