<?php
require 'functions.php';
if (isset($_POST["registrasi"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
      alert('user berhasil ditambahkan');
      window.location.href = 'login.php';
    </script>";
  } else {
    echo mysqli_error($conn);
  }
}


?>

<!DOCTYPE html>
<html>
<head>

	 <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

	<title>Halaman Registrasi</title>
	<style>
		label {
			display: block;
		}

  body {
    font-family: Arial, sans-serif;
    background-color: #F7F7F7;
  }

  h1 {
    text-align: center;
    color: #3E3E3E;
    margin-top: 50px;
  }

  form {
    max-width: 500px;
    margin: 0 auto;
    background-color: #FFFFFF;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  }

  ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  li {
    margin-bottom: 10px;
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #BFBFBF;
    border-radius: 5px;
    font-size: 16px;
    color: #3E3E3E;
  }

  button[type="submit"] {
    background-color: #4285F4;
    color: #FFFFFF;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }

  button[type="submit"]:hover {
    background-color: #357AE8;
  }
</style>

	</styl>
</head>
<body>

<div class="container">
<h1 class="text-center my-5"><i class="bi bi-person-plus"></i> Registrasi</h1>

<form action="" method="post">
        <div class="form-group">
  <label for="username">
    <i class="fas fa-user"></i> Username
  </label>
  <div class="input-group">
    <input type="text" name="username" id="username" class="form-control">
    <div class="input-group-append">
      <span class="input-group-text"><i class="bi bi-keyboard"></i></span>
    </div>
  </div>
</div>
         <div class="form-group">
  <label for="password">
    <i class="fas fa-lock"></i> Password
  </label>
  <div class="input-group">
    <input type="password" name="password" id="password" class="form-control">
    <div class="input-group-append">
      <span class="input-group-text"><i class="bi bi-keyboard"></i></span>
    </div>
  </div>
</div>
         
      <br>
        <button type="submit" name="registrasi" id="registrasi" class="btn btn-primary">
            <i class="fas fa-user-plus"></i> Registrasi
        </button>
    </form>
</div>

</body>
</html>