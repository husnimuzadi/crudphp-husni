<?php 
// koneksi ke database
require 'functions.php';
$id = $_GET["id"];
$zis = query("SELECT * FROM zis WHERE id = $id") [0];

if (isset($_POST["submit"])) {

	if (ubah_zis($_POST) > 0 ) {
			echo "
				<script>

						alert('Data berhasil diubah');
						document.location.href = 'index.php';


				</script

			";

	}else{

		echo "
		<script>

						alert('data gagal diubah');
						document.location.href = 'index.php';


				</script 

				";
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data ZIS</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
  <style>
    /* Custom style for icon positioning */
    .input-group-prepend .input-group-text {
      background-color: transparent;
      border: none;
    }
  </style>
</head>
<body>
  <h1 class="text-center my-5">Ubah Data ZIS</h1>
  <div class="container">
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $zis["id"]; ?>">
      <div class="form-group">
      <label for="nama_muzakki">Nama Muzakki</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>
          <input type="text" class="form-control" name="nama_muzakki" id="nama_muzakki" value="<?= $zis["nama_muzakki"]; ?>">
        </div>
      </div>
      <div class="form-group">
    <label for="jenis_zis">Jenis ZIS:</label>
    <input type="text" class="form-control" name="jenis_zis" id="jenis_zis" value="<?= $zis["jenis_zis"]; ?>">
    </div>
      <div class="form-group">
      <label for="jumlah_zis">Jumlah ZIS</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-coins"></i></div>
          </div>
          <input type="text" class="form-control" id="jumlah_zis" name="jumlah_zis" value="<?= $zis["jumlah_zis"]; ?>">
        </div>
      </div>
      <div class="form-group">
      <label for="tanggal_bayar">Tanggal Bayar</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-calendar"></i></div>
          </div>
          <input type="date" class="form-control" name="tanggal_bayar" id="tanggal_bayar" value="<?= $zakat["tanggal_bayar"]; ?>">
        </div>
      </div>
    <div class="form-group">
    <label for="metode_pembayaran">Metode Pembayaran:</label>
    <input type="text" class="form-control" name="metode_pembayaran" id="metode_pembayaran" value="<?= $zis["metode_pembayaran"]; ?>">
    </div>
    <div class="form-group">
    <label for="sumber_dana">Sumber Dana:</label>
    <input type="text" class="form-control" name="sumber_dana" id="sumber_dana" value="<?= $zis["sumber_dana"]; ?>">
    </div>
    <form action="" method="post">
      <div class="form-group">
      <label for="lembaga_penerima">Lembaga Penerima</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-building"></i></div>
          </div>
          <input type="text" class="form-control" name="lembaga_penerima" id="lembaga_penerima" placeholder="Masukkan Lembaga Penerima" value="<?= $zis["lembaga_penerima"]; ?>">
        </div>
      </div>
      <form action="" method="post">
      <div class="form-group">
      <label for="penyaluran_dana">Penyaluran Dana</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-money-check"></i></div>
          </div>
          <input type="text" class="form-control" name="penyaluran_dana" id="penyaluran_dana" value="<?= $zis["penyaluran_dana"]; ?>">
        </div>
      </div>
      <form action="" method="post">
      <div class="form-group">
      <label for="catatan">Catatan</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-book"></i></div>
          </div>
          <input type="text" class="form-control" name="catatan" id="catatan" value="<?= $zis["catatan"]; ?>">
        </div>
      </div>
        <button type="submit" class="btn btn-primary mt-1 mb-2" name="submit">Ubah</button>
        <a href="index.php" class="btn btn-danger mt-1 mb-2 float-center">Kembali</a>
    </form>
  </div>
</body>
</html>
