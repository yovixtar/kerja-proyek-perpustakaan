<?php
$stat = mysqli_query($l, "DELETE FROM pinjaman where id_p=".$_GET['idx']."");

?>
<script type="text/javascript">
	document.location='petugas.php?page=prapinjam'
</script>