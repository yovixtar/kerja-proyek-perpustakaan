<?php
if ($_POST['login'] && $_POST['nis'] && $_POST['password']) {
	$stat = mysqli_query($l, "SELECT * FROM siswa where nis_s='".$_POST['nis']."' AND password_s='".$_POST['password']."' ");
	$cekuser=mysqli_fetch_array($stat);
	if (empty($cekuser['id_s'])) {
	?>
	<script type="text/javascript">
		alert('User tidak ditemukan');
		document.location='?page=login'
	</script>
	<?php
	}else{
	$cekpass=$cekuser['status_pass'];
	if ($cekpass == 1) {
		?>
		<script type="text/javascript">
			document.location='?page=sandibaru&id=<?php echo $cekuser['id_s']?>'
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			document.location='siswa.php?u=<?php echo $_POST['nis'] ?>'
		</script>
		<?php
	}
	}
}else{
	?>
	<script type="text/javascript">
		alert('Isi benar form login');
		document.location='?page=login'
	</script>
	<?php
}