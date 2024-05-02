<?php 
// koneksi ke database
require 'functions.php';
$id_penerima = $_GET["id_penerima"];

if (hapus_penerima_zis($id_penerima) > 0 ){
  echo "
  <script>
  alert('Data Berhasil Dihapus');
  document.location.href = 'penerima_zis.php';
  </script>
  ";
}
?>
