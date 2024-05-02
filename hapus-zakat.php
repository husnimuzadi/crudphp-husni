<?php 
// koneksi ke database
require 'functions.php';
$id = $_GET["id"];

if (hapus_zis($id) > 0 ){
  echo "
  <script>
  alert('Data Berhasil Dihapus');
  document.location.href = 'data-zis.php';
  </script>
  ";
}
?>