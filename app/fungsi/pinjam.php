<?php
if ($_POST['jumlah']=='') {

	?>
<script type="text/javascript">
	alert('Mohon isi jumlah Peminjaman Buku !');
	document.location='siswa.php?u=<?php echo $_POST['user'] ?>';
</script>
	<?php
}else{
$masukan = mysqli_query($l, "INSERT INTO pinjaman SET buku_p=".$_POST['buku'].",user_p=".$_POST['user'].",jumlah_p=".$_POST['jumlah']." ")  OR DIE(mysql_error());
if ($masukan) {
	?>
	<script type="text/javascript">
		alert('Pesanan sudah terdaftar, mohon segera mengambil buku di Perpustakaan');
		document.location='siswa.php?u=<?php echo $_POST['user'] ?>';
	</script>
	<?php
}
}

?>