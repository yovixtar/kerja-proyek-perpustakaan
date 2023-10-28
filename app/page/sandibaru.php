<center>
	<div class="w3-container w3-card-8 w3-red">
		<h1>Buat Sandi Baru</h1>
	</div>
	<br />
	<div class="w3-padding w3-margin-top w3-border-blue w3-border" style="width: 90%">
		<form action="?fungsi=sandibaru" method="post">
			<input type="password" name="password" placeholder="Password" class="w3-input w3-margin-bottom">
			<input type="hidden" name="id_s" value="<?php echo $_GET['id'] ?>">
			<button type="submit" class="w3-btn w3-blue" style="font-size: 25px" name="ganti" value="ganti">Buat</button>
		</form>
	</div>
</center>