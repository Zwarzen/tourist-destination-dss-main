<?php
include("koneksi.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- UNICONS -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
	<title>HirwiGo App</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="assets/style_item.css">
	<link rel="stylesheet" href="style_db.css">
	<!---<title> Responsive Our Team Section | CodingLab </title>---->
	<link rel="stylesheet" href="card_profile/style.css" />
	<!-- Fontawesome CDN Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<link rel="icon" href="https://www.pinclipart.com/picdir/big/7-75302_clip-art-transparent-library-world-png-jokingart-com.png">
	<!--  -->
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<div class="container navbar">
			<a class="navbar-brand text-decoration-none mb-0 brandd text-primary" href="index.php">
				<i class="uil uil-bus-school fs-5" width="30px"></i>
				<strong>BanyuwangiGo!</strong>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-decoration-none active" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-decoration-none" href="#kategori">Kategori</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- QUESTION CHOOSE -->
	<?php
	if (!isset($_POST['button'])) {
	?>
		<div class="container mb-5">
			<center>
				<img src="assets/jalann.png" width="350px" alt="">
				<h3 class="mx-lg-5 text-center my-4">Yuk, Cari Destinasi <br> Berdasarkan Kriteria Yang Kamu Inginkan</h3>
				<a href="#kategori" class="btn text-decoration-none rounded-pill btn-primary mx-lg-2">
					Kategori
				</a>
				<a href="index.php" class="btn text-decoration-none rounded-pill btn-outline-primary">
					Kembali
				</a>
			</center>
			<form class="row g-3 mt-1" id="kategori" name="form1" method="post" action="">
				<?php
				//membuat query
				$querykriteria = mysqli_query($db, "SELECT * FROM tb_kriteria ORDER BY id_kriteria ASC");
				//apabila data yang dimaksud ada dalam tabel maka data ditampilkan
				while ($datakriteria = mysqli_fetch_array($querykriteria)) {
				?>
					<div class="col-md-4">
						<label for="inputState" class="form-label">
							<strong>
								<?php echo ucwords($datakriteria['nama_kriteria']); ?>
							</strong>
						</label>
						<select id="inputState" class="form-select" name="kriteria<?php echo $datakriteria['id_kriteria']; ?>" id="kriteria<?php echo $datakriteria['id_kriteria']; ?>" class="inputan">
							<option value="bawah"><?php echo $datakriteria['nama_bawah']; ?></option>
							<option value="tengah"><?php echo $datakriteria['nama_tengah']; ?></option>
							<option value="atas"><?php echo $datakriteria['nama_atas']; ?></option>
						</select>
					</div>
				<?php
				}
				?>
				<div class="col-md-4">
					<input type="submit" name="button" id="button" value="Proses" class="tombol btn btn-primary rounded-3 hasil_btn" />
				</div>
			</form>
		</div>
	<?php
	} else {
	?>
		<div id="perhitungan" style="display:none;">
			<div class="container">
				<center>
					<img src="assets/otw.png" width="350px" alt="">
				
				<h3 class="mx-lg-5 text-center my-4">Gimana Hasilnya? <br> Semoga Memuaskan ya, Happy Holiday Guys!</h3>
				<a href="fuzzy-database-php-mysql.php" class="btn text-decoration-none rounded-pill btn-primary mx-lg-2">
					Kategori
				</a>
				<a href="index.php" class="btn text-decoration-none rounded-pill btn-outline-primary">
					Kembali
				</a>
				</center>
				<label class="mt-5">Semua Hasil : </label>
				<div class="table-responsive table-striped mt-3 mb-5">
					<table border="0" class="table table-hover">
						<tr class="table-dark">
							<th>No</th>
							<th>Nama Wisata</th>
							<?php
							$querykriteria = mysqli_query($db, "SELECT * FROM tb_kriteria ORDER BY id_kriteria");
							while ($datakriteria = mysqli_fetch_array($querykriteria)) {
							?>
								<th><?php echo $datakriteria['nama_kriteria']; ?> <?php echo $datakriteria['nama_bawah']; ?></th>
								<th><?php echo $datakriteria['nama_kriteria']; ?> <?php echo $datakriteria['nama_tengah']; ?></th>
								<th><?php echo $datakriteria['nama_kriteria']; ?> <?php echo $datakriteria['nama_atas']; ?></th>
							<?php
							}
							?>
						</tr>
						<?php
						$queryalternatif = mysqli_query($db, "SELECT * FROM alternatif ORDER BY id_alternatif");
						$i = 0;
						while ($dataalternatif = mysqli_fetch_array($queryalternatif)) {
							$i++;
						?>
							<tr class="">
								<td><?php echo $i; ?></td>
								<td><?php echo $dataalternatif['nama_alternatif']; ?></td>
								<?php
								$querykriteria = mysqli_query($db, "SELECT * FROM tb_kriteria ORDER BY id_kriteria");
								while ($datakriteria = mysqli_fetch_array($querykriteria)) {
									$querynilai = mysqli_query($db, "SELECT * FROM tb_nilai WHERE id_alternatif = '$dataalternatif[id_alternatif]' AND id_kriteria = '$datakriteria[id_kriteria]'");
									$datanilai = mysqli_fetch_array($querynilai);
								?>
									<td><?php echo $datanilai['bawah']; ?></td>
									<td><?php echo $datanilai['tengah']; ?></td>
									<td><?php echo $datanilai['atas']; ?></td>
								<?php
								}
								?>
							</tr>
						<?php
						}
						?>
					</table>
				</div>
			</div>
			<div class="container">
				<label class="my-3">Perhitungan Sesuai Kriteria yang Dipilih : </label>
				<div class="table-responsive table-striped mt-3 mb-5">
					<table border="0" class="table table-hover">
						<tr class="table-dark">
							<th>No</th>
							<th>Nama Wisata</th>
							<?php
							$querykriteria = mysqli_query($db, "SELECT * FROM tb_kriteria ORDER BY id_kriteria");
							while ($datakriteria = mysqli_fetch_array($querykriteria)) {
								if ($_POST['kriteria' . $datakriteria['id_kriteria']] == 'bawah') {
							?>
									<th><?php echo $datakriteria['nama_kriteria']; ?> <?php echo $datakriteria['nama_bawah']; ?></th>
								<?php
								} else if ($_POST['kriteria' . $datakriteria['id_kriteria']] == 'tengah') {
								?>
									<th><?php echo $datakriteria['nama_kriteria']; ?> <?php echo $datakriteria['nama_tengah']; ?></th>
								<?php
								} else if ($_POST['kriteria' . $datakriteria['id_kriteria']] == 'atas') {
								?>
									<th><?php echo $datakriteria['nama_kriteria']; ?> <?php echo $datakriteria['nama_atas']; ?></th>
								<?php
								}
								?>
							<?php
							}
							?>
							<th>Fire Strength</th>
						</tr>
						<?php
						$id_alternatif = array();
						$nama_alternatif = array();
						$fire_strength = array();

						$queryalternatif = mysqli_query($db, "SELECT * FROM alternatif ORDER BY id_alternatif");
						$i = 0;
						while ($dataalternatif = mysqli_fetch_array($queryalternatif)) {
							$termasuk = true;
							if ($termasuk == true) {
								$id_alternatif[$i] = $dataalternatif['id_alternatif'];
								$nama_alternatif[$i] = $dataalternatif['nama_alternatif'];
								//echo $nama_alternatif[$i];
								$fire_strength[$i] = 0;
						?>
								<tr>
									<td><?php echo ($i + 1); ?></td>
									<td><?php echo $dataalternatif['nama_alternatif']; ?></td>
									<?php
									$querykriteria = mysqli_query($db, "SELECT * FROM tb_kriteria ORDER BY id_kriteria");
									$j = 0;
									while ($datakriteria = mysqli_fetch_array($querykriteria)) {
										$querynilai = mysqli_query($db, "SELECT * FROM tb_nilai WHERE id_alternatif = '$dataalternatif[id_alternatif]' AND id_kriteria = '$datakriteria[id_kriteria]'");
										$datanilai = mysqli_fetch_array($querynilai);
										if ($_POST['kriteria' . $datakriteria['id_kriteria']] == 'bawah') {
									?>
											<td>
												<?php
												if ($j == 0) {
													$fire_strength[$i] = $datanilai['bawah'];
												} else if ($fire_strength[$i] > $datanilai['bawah']) {
													$fire_strength[$i] = $datanilai['bawah'];
												}
												echo $datanilai['bawah'];
												?>
											</td>
										<?php
										} else if ($_POST['kriteria' . $datakriteria['id_kriteria']] == 'tengah') {
										?>
											<td>
												<?php
												if ($j == 0) {
													$fire_strength[$i] = $datanilai['tengah'];
												} else if ($fire_strength[$i] > $datanilai['tengah']) {
													$fire_strength[$i] = $datanilai['tengah'];
												}
												echo $datanilai['tengah'];
												?>
											</td>
										<?php
										} else if ($_POST['kriteria' . $datakriteria['id_kriteria']] == 'atas') {
										?>
											<td><?php
												if ($j == 0) {
													$fire_strength[$i] = $datanilai['atas'];
												} else if ($fire_strength[$i] > $datanilai['atas']) {
													$fire_strength[$i] = $datanilai['atas'];
												}
												echo $datanilai['atas'];
												?>
											</td>
									<?php
										}
										$j++;
									}
									?>
									<td><?php echo $fire_strength[$i]; ?></td>
								</tr>
						<?php
								$i++;
							}
						}
						?>
					</table>
				</div>
			</div>
		</div>
		<div class="container">
			<input type="button" class="btn btn-primary rounded-3 mt-2" value="Lihat Hasil Detail" onclick="document.getElementById('perhitungan').style.display='block';" />
			<h4 class="mt-5 mb-3">Hasil Analisa Destinasi Wisata Menggunakan SPK Metode AHP Database</h4>
			<?php
			for ($i = 0; $i < count($id_alternatif); $i++) {
				for ($j = $i; $j < count($id_alternatif); $j++) {
					if ($fire_strength[$j] > $fire_strength[$i]) {
						$tmp_fire_strength = $fire_strength[$i];
						$tmp_nama_alternatif = $nama_alternatif[$i];
						$tmp_id_alternatif = $id_alternatif[$i];
						$fire_strength[$i] = $fire_strength[$j];
						$nama_alternatif[$i] = $nama_alternatif[$j];
						$id_alternatif[$i] = $id_alternatif[$j];
						$fire_strength[$j] = $tmp_fire_strength;
						$nama_alternatif[$j] = $tmp_nama_alternatif;
						$id_alternatif[$j] = $tmp_id_alternatif;
					}
				}
			}
			?>
			<table class="table table-hover" border="0">
				<tr class="table-dark">
					<td>Ranking</td>
					<td>Nama Wisata</td>
					<td>Nilai Fire Strength</td>
				</tr>
				<?php
				for ($i = 0; $i < count($id_alternatif); $i++) {
				?>
					<tr>
						<td><?php echo ($i + 1); ?></td>
						<td><?php echo $nama_alternatif[$i]; ?></td>
						<td><?php echo $fire_strength[$i]; ?></td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>

		<?php
		if ($fire_strength[0] > 0) {
		?>
			<div class="container mb-5">
				<label class="mt-2 h6" for="">Berdasarkan kriteria yang diinginkan, sistem merekomendasikan destinasi wisata</label>
				<?php
				for ($i = 0; $i < count($id_alternatif); $i++) {
					if ($fire_strength[$i] == $fire_strength[0]) {
						if ($i > 0) {
							echo ", ";
						}
						echo $nama_alternatif[$i];
					}
				}
				?>
			</div>
		<?php
		} else {
		?>
			<div class="container mb-5">
				<label for="">Yah, Sayang banget hasil tidak ditemukan <i class="uil uil-sad-squint"></i> dicari lagi yuk sesuai kategori..</label>
			</div>
	<?php
		}
	}
	?>
</body>

</html>