<title>Lembar Disposisi</title>
<?php
	include 'koneksi.php';
	include 'function_tanggal.php';
?>
	<style type="text/css">
		body {
			font-size: 12px!important;
			color: #212121;
		}
		table {
			width: 100%;
			font-size: 12px;
			color: 212121;
		}
		tr, td {
			border: 1px solid #444;
			padding: 8px!important;
			vertical-align: middle;!important;
		}
		#lbr {
			font-size: 17px;
			font-weight: bold;
		}
		.isi_rks {
			height: 150px!important;
		}
		.tgh {
			text-align: center;
		}
		#right {
            border-right: none !important;
        }
        #left {
            border-left: none !important;
        }
		.header {
			text-align: center;
			margin: -.5rem 0;
		}
		.logo1 {
			float: left;
			position: relative;
			width: 80px;
			height: 80px;
			margin: 0 0 0 1.2rem;
		}
		.logo2 {
			float: right;
			position: relative;
			width: 80px;
			height: 80px;
			margin: 0 0 0 1.2rem;
		}
		.text {
			font-size: 15px!important;
			font-weight: bold;
			text-transform: uppercase;
		}
		#lead {
			width: auto;
			position: relative;
			margin: 15px 0 0 75%;
		 }
		 .lead {
		 	font-weight: bold;
		 	text-decoration: underline;
		 	margin-bottom: -10px;
		 }
	</style>		
	<div class="row" align="center">
		<div class="header">
			<img src="logo-kota-jambi.jpg" class="logo1">
			<img src="logo.skolah.jpeg" class="logo2">
			<h6 class="text">MTSN 01<br> Madrasah Tsanawiyah Negri 01 Sebrang Kota jambi <br> TERAKREDITASI : A</h6>
			<h4>Berdiri Tahun 1968 NSM : 121115710001 NPSN:210508328 SK Izin Operasional No.681.5/1968/Disdik Tgl 19 Januari 2018</h4>
			<td colspan="3" bordered="#000000">
				<div align="center" style="border: solid; font-size: 10px;">
					Alamat : Jl. Kh. Hasan Anang OLAK KEMANG DANAU TELUK KOTA JAMBI  36262 Email: mtsn1kotajambi@gmail.com.sch.id Web: mtsn1kotajambi.mdrsh.id
				</div>
			</td>
		</div>
		<br>
		<br>
		<table cellspacing="0" cellspacing="5" >
			<?php
				$id_surat=$_REQUEST['id'];
				$query	= "SELECT * FROM surat_masuk WHERE id='$id_surat'";
				$sql    = mysqli_query($connect, $query);
				while ($data = mysqli_fetch_array($sql)) {
	
			?>
				<tr>
					<td class="tgh" ="tgh" id="lbr" colspan="5">LEMBAR DISPOSISI</td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Tanggal Surat :</strong></td>
					<td id="left" colspan="2"><?php echo IndonesiaTgl($data['tanggal_surat']); ?></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Nomor Surat :</strong></td>
					<td id="left" colspan="2"><?php echo $data['no_surat']?></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> No Agenda :</strong></td>
					<td id="left" colspan="2"><?php echo $data['no_agenda']?></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Asal Surat :</strong></td>
					<td id="left" colspan="2"><?php echo $data['asal_surat']?></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Isi Ringkas :</strong></td>
					<td id="left" colspan="2"><?php echo $data['isi_ringkas'];?></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Diterima Tanggal :</strong></td>
					<td id="left" colspan="2"><?php echo IndonesiaTgl($data['tanggal_terima']) ?></td>
				</tr>
			<?php
				}

				$query2	= "SELECT * FROM disposisi JOIN surat_masuk ON disposisi.id_surat = surat_masuk.id WHERE disposisi.id_surat='$id_surat'";
				$sql2	=mysqli_query($connect, $query2);
				while ($row= mysqli_fetch_array($sql2)) {
			?>

				<tr class="isi_rks">
					<td>
						<strong> Isi Disposisi  </strong><br><?php echo $row['isi_disposisi'] ?>
						<div style="height: 50px"></div>
						<strong>Batas Waktu :</strong><?php echo $row['batas_waktu'] ?><br>
						<strong>Sifat :</strong><?php echo $row['sifat'] ?><br>
						<strong>Catatan :</strong> <br> <?php echo $row['catatan'] ?>
						<div style="height: 25px"></div>
					</td>
					<td><strong>Diteruskan Kepada :</strong><?php echo $row['tujuan']; ?></td>
				</tr>	
			<?php
				}
			?>			
		</table>
		<div id="lead">
			<p>Mengetahui,<br>
			Kepala Sekolah</p>
			<div style="height: 50px"></div>
			<p class="lead">udin </p>
			<p>NIP. 197502212009132003</p>
		</div>
	</div>	
	
	<script type="text/javascript">
		window.print();
	</script>