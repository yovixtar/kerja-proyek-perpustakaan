<?php
if (isset($_SESSION['petugas'])) {
	?>
	<script type="text/javascript">
		document.location='petugas.php'
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