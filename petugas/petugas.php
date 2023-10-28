<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="assets/w3.css">
	<script type="text/javascript">
		function angka(e) {
		  if (!/^[0-9]+$/.test(e.value)) {
		    e.value = e.value.substring(0,e.value.length-1);
		  }
		}
	</script>
	<style type="text/css">
		body{margin:0;font-family: arial, comic sans ms;}
		.induk-daftar{display: flex;flex-wrap: wrap;}
		.div-daftar{width: 48%;margin-left: 1%}
		.img-daftar{width: 100%}
		.div-keterangan{margin:20px;color: #fff;text-align: justify;background-color: #555;padding: 10px}
		.table-area{width: 95%;margin-top: 30px;font-size: 20px}
		.btn-menu{font-size: 30px}
	</style>
</head>
<body>
<div class="w3-bar btn-menu">
  <a href="?page=prapinjam" style="text-decoration: none"><button class="w3-bar-item w3-button w3-teal" style="width:33.3%">Pra-Pinjam</button></a>
  <a href="?page=peminjaman" style="text-decoration: none"><button class="w3-bar-item w3-button w3-red" style="width:33.3%">Peminjaman</button></a>
  <a href="index.php?fungsi=logout" style="text-decoration: none"><button class="w3-bar-item w3-button w3-blue" style="width:33.3%">Logout</button></a>
</div>
<?php
include 'base/koneksi.php';
$sw_default = isset($_GET['page']) ? $_GET['page'] : null;
switch ($sw_default) {
  case 'prapinjam':
    include 'app/page/prapinjam.php';
    break;
  case 'peminjaman':
    include 'app/page/peminjaman.php';
    break;  
  
  default:
    include 'app/page/utama.php';
    break;
}
?>
</body>
</html>