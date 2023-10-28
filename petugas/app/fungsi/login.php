<?php
if ($_POST['login'] && $_POST['pin']) {
	$stat = mysqli_query($l, "SELECT * FROM petugas where pin_p=".$_POST['pin']."");
	$cekuser=mysqli_fetch_array($stat);
	if (empty($cekuser['id_p'])) {
	?>
	<script type="text/javascript">
		alert('Petugas tidak ditemukan');
		document.location='?page=login'
	</script>
	<?php
	}else{
	?>
	<script type="text/javascript">
		alert('Welcome !');
		document.location='petugas.php?page=peminjam'
	</script>
	<?php
	}
}else{
	?>
	<script type="text/javascript">
		alert('Isi benar form login');
		document.location='?page=login'
	</script>
	<?php
}