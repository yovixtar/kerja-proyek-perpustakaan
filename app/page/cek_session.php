<?php
if (isset($_SESSION['siswa'])) {
	?>
	<script type="text/javascript">
		document.location='siswa.php'
	</script>
	<?php
}else{
	?>
	<script type="text/javascript">
		document.location='?page=login'
	</script>
	<?php
}
?>