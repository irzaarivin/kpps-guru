<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>
<body>

	<nav>
		<div class="navigation">
			<div id="keDocuments" class="dokumen item"><p><i class="bi bi-journals"></i></p></div>
			<div id="keHome" class="home item"><p><i class="bi bi-speedometer2"></i></p></div>
			<div id="keNotes" class="pelanggaran item"><p><i class="bi bi-info-circle"></i></p></div>
		</div>
	</nav>

	<div id="home">
		<div class="background-pr"></div>
		<h1 class="poin">KPPS</h1>
		<div class="point" id="poin">
			<div class="poinItem">
				<div class="circle">
					<h1>10</h1>
				</div>
				<p>Pelanggaran</p>
			</div>
			<div class="poinItem">
				<div class="circle">
					<h1>9</h1>
				</div>
				<p>Prestasi</p>
			</div>
		</div>
		<p class="name">Muhammad Irza Arivin Ngibadi</p>
		<div class="box">
			<h3>Data Pembinaan Dan Prestasi Siswa Tahun 2022-2023</h3>
			<br><hr><br>
			<h3>Siswa</h3>
			<br><hr><br>
			<p><b>Kelas : </b>XII RPL</p>
			<p><b>NIS : </b>00131</p>
			<p><b>Alamat : </b>Jl. Yang Lurus</p>
			<p><b>No Telepon : </b>081234567891</p>
		</div>
		<div class="box">
			<h3>Orang Tua/Wali</h3>
			<br><hr><br>
			<p><b>Ayah : </b>Bapaknya Contoh</p>
			<p><b>Ibu : </b>Ibunya Contoh</p>
			<p><b>Alamat : </b>Jl. Yang Lurus</p>
			<p><b>No Telepon : </b>081234567891</p>
		</div>
	</div>

	<div id="documents">
		<div class="menuDocs">
			<div id="keDocs" class="item">
				<i class="bi bi-folder"></i>
			</div>
			<div id="tambahDokumen" class="item">
				<i class="bi bi-plus-lg"></i>
			</div>
			<div id="keIzin" class="item">
				<i class="bi bi-card-text"></i>
			</div>
		</div>

		<div id="content">

			<div id="myDocs" class="item">

				<h1>Dokumen</h1>

				<div class="switch">
					<div id="pribadi" class="jenis">
						Pribadi
					</div>
					<div id="publik" class="jenis">
						Publik
					</div>
				</div>

				<div id="dokumenPribadi" class="isiDocs">
					<h2>Pribadi</h2><br>

					<div class="dokumenAsli">
						<div class="thumb">
							<i class="bi bi-card-image"></i>
						</div>
						<div class="detail">
							<h3>Surat Lamaran</h3>
							<p>type : png</p>
						</div>
					</div>

				</div>

				<div id="dokumenPublik" class="isiDocs">
					<h2>Publik</h2><br>

					<div class="dokumenAsli">
						<div class="thumb">
							<i class="bi bi-card-image"></i>
						</div>
						<div class="detail">
							<h3>Proposal Acara</h3>
							<p>type : png</p>
						</div>
					</div>

					<p><i>note : semua file yang anda unggah di publik, akan terlihat dan bisa diakses oleh semua guru.</i></p>
				</div>

				<script>
					$(document).ready(function(){

						var tomPrib = document.getElementById("pribadi");
						var tomPub = document.getElementById("publik");

						document.getElementById("dokumenPublik").style.display = "none";
						document.getElementById("dokumenPribadi").style.display = "none";

						tomPrib.addEventListener('click', function(){
							document.getElementById("dokumenPublik").style.display = "none";
							return document.getElementById("dokumenPribadi").style.display = "block";
						});

						tomPub.addEventListener('click', function(){
							document.getElementById("dokumenPribadi").style.display = "none";
							return document.getElementById("dokumenPublik").style.display = "block";
						});

					});
				</script>

			</div>

			<div id="tambahDocs" class="item">
				<h1>Tambah Dokumen</h1>

				<form action="" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="box">
						<h3>Judul</h3>
						<input type="text" name="judul" placeholder="..." required>
					</div><br><br>
					<div class="box">
						<h3>Pilih file anda</h3>
						<input type="file" name="file" placeholder="..." required>
					</div><br><br>
					<div class="box">
						<h3>Visibilitas</h3>
						<select name="visibilitas" id="visibilitas" required>
							<option value="private" selected>Pribadi</option>
							<option value="public">Publik</option>
						</select>
					</div><br><br>
					<button type="submit" name="unggah">Unggah</button>
				</form>

			</div>

			<div id="izin" class="item">
				<h1>Izin Saya</h1>
			</div>
			
		</div>

		<script>
			$(document).ready(function(){

				var keDocs = document.getElementById('keDocs');
				var tambahDokumen = document.getElementById('tambahDokumen');
				var keIzin = document.getElementById('keIzin');

				tambahDocs.style.display = 'none';
				izin.style.display = 'none';

				keDocs.addEventListener('click', function(){
					document.getElementById('izin').style.display = 'none';
					document.getElementById('tambahDocs').style.display = 'none';
					return document.getElementById('myDocs').style.display = 'block';
				});

				tambahDokumen.addEventListener('click', function(){
					document.getElementById('izin').style.display = 'none';
					document.getElementById('myDocs').style.display = 'none';
					return document.getElementById('tambahDocs').style.display = 'block';
				});

				keIzin.addEventListener('click', function(){
					document.getElementById('tambahDocs').style.display = 'none';
					document.getElementById('myDocs').style.display = 'none';
					return document.getElementById('izin').style.display = 'block';
				});

			});
		</script>
	</div>

	<div id="notes">
		<h1>Catatan Saya</h1>
		<br><br>
		<div class="not">
			
		</div>
		<i id="tambahCatatan" class="bi bi-plus"></i>

		<script>
			const tambahCatatan = document.getElementById('tambahCatatan');
			tambahCatatan.addEventListener('click', function(){
				return document.location.href = 'http://kpps-siswa.test';
			});
		</script>
	</div>

	<script>
		
		var keNotes = document.getElementById('keNotes');
		var keHome = document.getElementById('keHome');
		var keDocuments = document.getElementById('keDocuments');

		document.getElementById('notes').style.display = "none";
		document.getElementById('documents').style.display = "none";

		keNotes.addEventListener('click', function(){
			document.getElementById('home').style.display = "none";
			document.getElementById('documents').style.display = "none";
			return document.getElementById('notes').style.display = "block";
		});

		keHome.addEventListener('click', function(){
			document.getElementById('notes').style.display = "none";
			document.getElementById('documents').style.display = "none";
			return document.getElementById('home').style.display = "block";
		});

		keDocuments.addEventListener('click', function(){
			document.getElementById('home').style.display = "none";
			document.getElementById('notes').style.display = "none";
			return document.getElementById('documents').style.display = "block";
		});

	</script>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script>
		$("#poin").slick({
			arrows: false,
			mobileFirst: true,
			infinite: false,
			variableWidth: true,
			centerMode: true,
			centerPadding: '100px'
		});
	</script>
	
</body>
</html>