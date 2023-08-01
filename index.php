
<?php
include("koneksi.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- UNICONS -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
  <title>BanyuwangiGo!</title>
  <link rel="icon" href="https://www.pinclipart.com/picdir/big/7-75302_clip-art-transparent-library-world-png-jokingart-com.png">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="assets/style_item.css">
  <!---<title> Responsive Our Team Section | CodingLab </title>---->
  <link rel="stylesheet" href="Card_Profile/style.css" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <!-- NAVBAR -->
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
            <a class="nav-link text-decoration-none" href="#destination">Gallery</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <!-- <li class="nav-item">
            <a href="index.php" class="btn text-decoration-none rounded-pill btn-primary mx-lg-2">
              Cari Wisata
            </a>
          </li> -->
          <li class="nav-item">
            <a class="btn text-decoration-none rounded-pill btn-outline-primary" href="login.php">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME -->
  <section>
    <div class="flex-container container mt-5">
      <div class="flex-item-left">
        <label>Tim Petualang</label>
        <h1 class="display-3"><strong><strong>BanyuwangiGo!</strong></strong></h1>
        <label class="home_subtitle mt-1 text-muted">BanyuwangiGo merupakan sistem pendukung keputusan destinasi wisata di kawasan Banyuwangi. Yuk Cari destinasi wisata mu disini berdasarkan kriteria kamu inginkan!</label> <br>
        <!-- <a href="fuzzy-database-php-mysql.php" class="btn text-decoration-none rounded btn-primary mt-3 py-3">
          Cari Wisata &nbsp;<i class="uil uil-location-arrow button_icon"></i>
        </a> -->
      </div>
      <div class="flex-item-right">
        <img src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/05/27091453/keunggulan-banyuwangi.jpg" class="img-fluid rounded-3" alt="">
      </div>
    </div>
    <br>
    <br>
	<br>
	<br>
    <div class="container">
        <h3 class="text-center mb-2">Rekomendasi Wisata</h3> <br>
      <div class="flex-container mt-2">
      <div class="flex-item-left">
        <a href="https://youtu.be/zzJcADNiNhg" target="_blank">
            <img class="img-fluid rounded-3" src="https://3.bp.blogspot.com/-hTAhrvT6GS4/WDuX8of7jbI/AAAAAAAATCs/FMgAuwucOAYkVW9PsvgtOMTgqx8dTb70wCK4B/s1600/IMG-20161128-WA0004-1-728874.jpg" alt=""/>
        </a>
      </div>
	  
      <div class="flex-item-right">
		<br>
          <h5 class="video_title">Green Bay Banyuwangi</h5>
          <label class="text-muted"><small><small>178,008 views - Premiered Apr 1, 2021</small></small></label>
          <p class="video_p">"Pantai Teluk Hijau merupakan salah satu surga tersembunyi di Kabupaten Banyuwangi. Pantai ini masih alami dan akses menuju lokasi cukup menantang."</p>
          <a href="https://www.google.com/maps/place/Green+Bay/@-8.5638783,113.9220195,17z/data=!4m6!3m5!1s0x2dd41a974bdfab57:0x6e3a47e518f2bd7f!8m2!3d-8.5637715!4d113.9240041!16s%2Fg%2F1pv5x5hd7?entry=ttu" target="_blank" class="btn text-decoration-none rounded-pill btn-primary mt-2 py-3">
            Visited &nbsp;<i class="uil uil-map-pin-alt button_icon"></i>
          </a>
      </div>
      
    </div>
    <!-- <div class="container home_scroll-button mt-2">
      <a href="#destination">
        <label class="ms-4 text-muted"><i class="uil uil-mouse-alt h3"></i>scroll down</label>
      </a>
    </div> -->
  </section>

  <!-- ITEM Video -->
  <section class="container my-5" id="destination">
    <!-- <span class="text-primary d-flex justify-content-center"><small>Destinasi</small></span> -->
    <h3 class="text-center mb-4">Gallery</h3>
    <div class="body_item">
      <div class="wrapperr">
        <div class="card_destination">
          <img src="https://awsimages.detik.net.id/community/media/visual/2022/04/27/blue-flame-di-kawah-ijen-banyuwangi_169.jpeg?w=1200" />
          <div class="infoo">
            <h5>Kawah Ijen</h5>
            <p><small><small>
                  Wisata Pendakian Gunung dengan pemandangan yang memuaskan mata.
                </small></small></p>
            <a target="_blank" href="https://www.google.co.id/maps/dir//Kawah+Ijen,+Jawa+Timur/@-8.0582986,114.2402481,17z/data=!4m17!1m7!3m6!1s0x2dd1360879927549:0xa9c052cab461fff1!2sKawah+Ijen!8m2!3d-8.0584134!4d114.2412788!16s%2Fg%2F1214mf1m!4m8!1m0!1m5!1m1!1s0x2dd1360879927549:0xa9c052cab461fff1!2m2!1d114.2412788!2d-8.0584134!3e3?entry=ttu"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://campatour.com/wp-content/uploads/2019/07/Red-Island-Banyuwangi.jpg" />
          <div class="infoo">
            <h5>Red Island</h5>
            <p><small><small>
                  Wisata Pantai dengan pasir putih eksotis.
                </small></small></p>
            <a target="_blank" href="https://www.google.co.id/maps/dir//Red+Island+Beach,+Jawa+Timur/@-8.5908799,113.9762062,13z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x2dd40f3ce1bc2ce3:0xda32d7864c0d0c2c!2m2!1d114.0174061!2d-8.590967!3e3?entry=ttu"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://asset.kompas.com/crops/IsUlrgdbSo9jwwtI4TM2_a-KbKY=/0x0:960x640/750x500/data/photo/2021/08/12/6114b664ae31e.jpg" />
          <div class="infoo">
            <h5>Taman Sri Tanjung</h5>
            <p><small><small>
                  Wisata terdekat di daerah perkotaan, mudah dijangkau.
                </small></small></p>
            <a target="_blank" href="https://www.google.co.id/maps/dir//Taman+Sritanjung,+Kepatihan,+Kabupaten+Banyuwangi,+Jawa+Timur/@-8.2098677,114.3321131,13z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x2dd145e4456c0e2b:0xb36d921a472ecf77!2m2!1d114.373313!2d-8.2099547!3e3?entry=ttu"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://img.okezone.com/content/2017/02/04/406/1609434/padang-savana-sadengan-hadirkan-pertualangan-bak-di-afrika-uCB52f2uVO.JPG" />
          <div class="infoo">
            <h5>Sadengan Savana</h5>
            <p><small><small>
                  Salah satu objek wisata alam flora dan fauna di Kota Banyuwangi bertema Afrika.
                </small></small></p>
            <a target="_blank" href="https://www.bandung-zoo.com/"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://awsimages.detik.net.id/community/media/visual/2022/06/06/banyuwangi-buka-wisata-dari-atas-udara-1_43.jpeg?w=1200" />
          <div class="infoo">
            <h5>Aero Tourism Banyuwangi</h5>
            <p><small><small>
                  Nikmati perjalana wisata dengan terbang diatas kota Banyuwangi.
                </small></small></p>
            <a target="_blank" href="https://www.google.co.id/maps/dir//Blimbingsari+Airport,+Jl.+Tawang+Alun,+Dusun+Krajan,+Blimbingsari,+Kabupaten+Banyuwangi,+Jawa+Timur/@-8.3123916,114.2987218,13z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x2dd159fbf11371af:0xaa9857a39a62a028!2m2!1d114.3399217!2d-8.3124787!3e3?entry=ttu"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
        <div class="card_destination">
          <img src="https://cdn-1.timesmedia.co.id/images/2023/03/25/Masjid-Agung-Baiturrahman-Banyuwangi.jpg" />
          <div class="infoo">
            <h5>Masjid Baiturrahman</h5>
            <p><small><small>
                  Salah satu wisata religi di kota Banyuwangi.
                </small></small></p>
            <a target="_blank" href="https://www.google.com/maps?q=masjid+baiturrahman+banyuwangi&source=lmns&entry=mt&bih=739&biw=1536&client=firefox-b-d&hl=id&sa=X&ved=2ahUKEwjxl8mt8vv_AhU3zaACHdwJBsEQ_AUoAnoECAEQAg"><small><small>Gaskeun </small><i class="uil uil-plane-departure"></i></small></a>
          </div>
        </div>
      </div>
    </div>
  </section>

	<!-- QUESTION CHOOSE -->
	<?php
	if (!isset($_POST['button'])) {
	?>
		<div class="container mb-5">
			<center>
				<img src="assets/jalann.png" width="350px" alt="">
				<h3 class="mx-lg-5 text-center my-4">Yuk, Cari Destinasi <br> Berdasarkan Kriteria Yang Kamu Inginkan</h3>
				
				<!-- <a href="index.php" class="btn text-decoration-none rounded-pill btn-outline-primary">
					Kembali
				</a> -->
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
				<!-- <a href="fuzzy-database-php-mysql.php" class="btn text-decoration-none rounded-pill btn-primary mx-lg-2">
					Kategori
				</a> -->
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
