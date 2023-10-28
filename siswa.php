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
		body{margin:0;font-family: arial, comic sans ms;background-color: #888}
		.induk-daftar{display: flex;flex-wrap: wrap;}
		.div-daftar{width: 48%;margin-left: 1%}
		.img-daftar{width: 100%}
		.div-keterangan{margin:20px;color: #fff;text-align: justify;background-color: #555;padding: 10px}
		.to-top{
			font-size: 20px;
			border-radius: 50px;
			position: fixed;
			bottom: 4vw;
			right:4vw;
			z-index: 100;
			text-decoration: none
		}
	</style>
</head>
<body>
<?php
$sw_default = isset($_GET['page']) ? $_GET['page'] : null;
switch ($sw_default) {
  case 'detail':
    include 'app/page/detail_buku.php';
    break;
  
  default:
    include 'app/page/daftar_buku.php';
    break;
}
?>
<a href="index.php?fungsi=logout" class="to-top w3-red w3-card-8"><div style="padding: 10px">Logout</div></a>

</body>
</html>