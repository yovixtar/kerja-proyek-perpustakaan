<?php
if ($_POST['ganti'] && $_POST['password'] && $_POST['id_s']) {
	$stat = mysqli_query($l, "UPDATE siswa SET password_s='".$_POST['password']."', status_pass=2 WHERE id_s=".$_POST['id_s']." ");
	if ($stat) {
		?>
		<script type="text/javascript">
		alert('Berhasil merubah sandi, Ayo login dulu...');
			document.location='?page=login'
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
		alert('Gagal merubah sandi !');
			document.location='?page=sandibaru&id=<?php echo $_POST['id_s']?>'
		</script>
		<?php
	}
}else{
	?>
		<script type="text/javascript">
		alert('Sandi Baru tidak ditemukan!');
			document.location='?page=login'
		</script>
		<?php
}
?>