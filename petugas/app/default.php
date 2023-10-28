<!DOCTYPE html>
<html>
<head>
	<title>GO-Read Muhamka</title>
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
		body{margin:0;font-family: arial;}
	</style>
	
</head>
<body>
<?php
$sw_default = isset($_GET['page']) ? $_GET['page'] : null;
switch ($sw_default) {
  case 'login':
    include 'app/page/login.php';
    break;
  
  default:
    include 'app/page/cek_session.php';
    break;
}
?>
</body>
</html>