<?php
$stat = mysqli_query($l, "UPDATE pinjaman SET status_p=3 where id_p=".$_GET['idx']."");

?>
<script type="text/javascript">
	document.location='petugas.php?page=peminjaman'
</script>