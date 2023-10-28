<center>
	<div class="w3-container w3-card-8 w3-red">
		<h1>LOGIN</h1>
	</div>
	<br />
	<div class="w3-padding w3-margin-top w3-border-blue w3-border" style="width: 90%">
		<form action="?fungsi=login" method="post">
			<input type="text" name="nis" maxlength="10" onkeyup="angka(this)" placeholder="NIS Siswa" class="w3-input w3-margin-bottom">
			<input type="password" name="password" placeholder="Password" class="w3-input w3-margin-bottom">
			<button type="submit" class="w3-btn w3-blue" style="font-size: 25px" name="login" value="login">Login</button>
		</form>
	</div>
</center>