<?php 
// koneksi ke database
require 'functions.php';
$id_penerima = $_GET["id_penerima"];
$penerima_zis = query("SELECT * FROM penerima_zis WHERE id_penerima = $id_penerima") [0];

if (isset($_POST["submit"])) {

	if (ubah_penerima_zis($_POST) > 0 ) {
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
  <title>Ubah Data Penerima ZIS</title>
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
  <h1 class="text-center my-5">Ubah Data Penerima ZIS</h1>
  <div class="container">
    <form action="" method="post">
    <input type="hidden" name="id_penerima" value="<?= $penerima_zis["id_penerima"]; ?>">
      <div class="form-group">
      <label for="nama_penerima">Nama Penerima</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>
          <input type="text" class="form-control" name="nama_penerima" id="nama_penerima" value="<?= $penerima_zis["nama_penerima"]; ?>">
        </div>
      </div>
      <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $penerima_zis["alamat"]; ?>">
    </div>
      <div class="form-group">
      <label for="status_kelayakan">Status Kelayakan</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-coins"></i></div>
          </div>
          <input type="text" class="form-control" id="status_kelayakan" name="status_kelayakan" value="<?= $penerima_zis["status_kelayakan"]; ?>">
        </div>
      </div>
      <div class="form-group">
      <label for="kebutuhan">Kebutuhan</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-calendar"></i></div>
          </div>
          <input type="text" class="form-control" name="kebutuhan" id="kebutuhan" value="<?= $penerima_zis["kebutuhan"]; ?>">
        </div>
      </div>
    <form action="" method="post">
      <div class="form-group">
      <label for="kategori_penerima">Kategori Penerima</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-book"></i></div>
          </div>
          <input type="text" class="form-control" name="kategori_penerima" id="kategori_penerima" value="<?= $penerima_zis["kategori_penerima"]; ?>">
        </div>
      </div>
        <button type="submit" class="btn btn-primary mt-1 mb-2" name="submit">Ubah</button>
        <a href="index.php" class="btn btn-danger mt-1 mb-2 float-center">Kembali</a>
    </form>
  </div>
</body>
</html>
