<?php 
$conn = mysqli_connect("localhost","root", "", "husni-1412220019");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

  return $rows;
}

function tambah_zis($data){
    global $conn;
    $nama_muzakki = htmlspecialchars($data["nama_muzakki"]);
    $jumlah_zis = htmlspecialchars($data["jumlah_zis"]);
    $tanggal_bayar = htmlspecialchars($data["tanggal_bayar"]);
    $catatan = htmlspecialchars($data["catatan"]);
    $sumber_dana = htmlspecialchars($data["sumber_dana"]);
    $metode_pembayaran = htmlspecialchars($data["metode_pembayaran"]);
    $lembaga_penerima = htmlspecialchars($data["lembaga_penerima"]);
    $penyaluran_dana = htmlspecialchars($data["penyaluran_dana"]);
		$jenis_zis = htmlspecialchars($data["jenis_zis"]);

    $query = "INSERT INTO zis (nama_muzakki, jumlah_zis, tanggal_bayar, catatan, sumber_dana, metode_pembayaran, lembaga_penerima, penyaluran_dana, jenis_zis) 
              VALUES ('$nama_muzakki', '$jumlah_zis', '$tanggal_bayar', '$catatan', '$sumber_dana', '$metode_pembayaran', '$lembaga_penerima', '$penyaluran_dana', '$jenis_zis')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah_penerima($data){
	global $conn;
	$nama_penerima = htmlspecialchars($data["nama_penerima"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$status_kelayakan = htmlspecialchars($data["status_kelayakan"]);
	$kebutuhan = htmlspecialchars($data["kebutuhan"]);
	$kategori_penerima = htmlspecialchars($data["kategori_penerima"]);

	$query = "INSERT INTO penerima_zis (nama_penerima, alamat, status_kelayakan, kebutuhan, kategori_penerima) 
						VALUES ('$nama_penerima', '$alamat', '$status_kelayakan', '$kebutuhan', '$kategori_penerima')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapus_zis($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM zis WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function hapus_penerima_zis($id_penerima){
	global $conn;
	mysqli_query($conn, "DELETE FROM penerima_zis WHERE id_penerima = $id_penerima");
	return mysqli_affected_rows($conn);
}

function ubah_zis ($data){
  global $conn;
  $id = $data["id"];
  $nama_muzakki = htmlspecialchars($data["nama_muzakki"]);
  $jumlah_zis = htmlspecialchars($data["jumlah_zis"]);
  $tanggal_bayar = htmlspecialchars($data["tanggal_bayar"]);
  $catatan = htmlspecialchars($data["catatan"]);
  $sumber_dana = htmlspecialchars($data["sumber_dana"]);
  $metode_pembayaran = htmlspecialchars($data["metode_pembayaran"]);
  $lembaga_penerima = htmlspecialchars($data["lembaga_penerima"]);
  $penyaluran_dana = htmlspecialchars($data["penyaluran_dana"]);
  $jenis_zis = htmlspecialchars($data["jenis_zis"]);

	$query = "UPDATE zis SET
				nama_muzakki = '$nama_muzakki',
				jumlah_zis = '$jumlah_zis',
				tanggal_bayar = '$tanggal_bayar',
				catatan = '$catatan',
				sumber_dana = '$sumber_dana',
				metode_pembayaran = '$metode_pembayaran',
				lembaga_penerima = '$lembaga_penerima',
				penyaluran_dana = '$penyaluran_dana',
				jenis_zis = '$jenis_zis'

				WHERE id = $id ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}
function ubah_penerima_zis ($data){
  global $conn;
  $id_penerima = $data["id_penerima"];
  $nama_penerima = htmlspecialchars($data["nama_penerima"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $status_kelayakan = htmlspecialchars($data["status_kelayakan"]);
  $kebutuhan = htmlspecialchars($data["kebutuhan"]);
  $kategori_penerima = htmlspecialchars($data["kategori_penerima"]);

	$query = "UPDATE penerima_zis SET
				nama_penerima = '$nama_penerima',
				alamat = '$alamat',
				status_kelayakan = '$status_kelayakan',
				kebutuhan = '$kebutuhan',
				kategori_penerima = '$kategori_penerima'

				WHERE id_penerima = $id_penerima ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}
function registrasi($data){
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>

		alert ('Username sudah terdaftar');

		</script>";
		return false;
	}

	// cek konfirmasi


	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, " INSERT INTO user VALUES('','$username', '$password')");

	return mysqli_affected_rows($conn);
	
}

// function login($data) {
//   global $conn;

//   $username = $data["username"];
//   $password = $data["password"];

//   // query to check if the entered username and password match the data stored in the database
//   $query = "SELECT * FROM user WHERE username = '$username'";
//   $result = mysqli_query($conn, $query);

//   if (mysqli_num_rows($result) === 1) {
//     $row = mysqli_fetch_assoc($result);
//     if (password_verify($password, $row["password"])) {
//       return true;
//     }
//   }

//   return false;
// }
?>


