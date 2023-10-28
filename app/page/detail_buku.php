<?php
if ($_GET['idx']==1) {
	?>
<div class="w3-container w3-card-8 w3-blue">
	<h1>Detail Buku</h1>
</div>
<br />
<div style="margin-left: 20px">
<a href="?u=<?php echo $_GET['u'] ?>">
	<button class="w3-btn w3-red">< Back</button>
</a>
</div>
<center>
<h2 style="color: #fff">Sistem Operasi Kelas 10</h2>
	<div class="div-daftar">
		<img src="img/1.jpg" class="img-daftar">
	</div>
</center>
<div class="div-keterangan">
	Buku ini adalah buku pelajaran kelas 10 semester 1 mata pelajaran sistem operasi.
</div>
<center>
	<button class="w3-btn w3-blue w3-large" onclick="openPinjam()">PINJAM</button>
</center>
<br />
<br />
<br />
<div id="modalPinjam" class="w3-modal">
  <div class="w3-modal-content w3-animate-top">

    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('modalPinjam').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <h2>Pinjam Buku</h2>
    </header>

    <div class="w3-container">
      <p>Isi Jumlah Peminjaman Buku</p>
	<form action="index.php?fungsi=pinjam" method="POST">
		<input type="hidden" name="buku" value="<?php echo $_GET['idx'] ?>">
		<input type="hidden" name="user" value="<?php echo $_GET['u'] ?>">
		<input type="text" onkeyup="angka(this)" name="jumlah" class="w3-input">
		<br />
		<center>
		<button class="w3-btn w3-blue w3-large" type="submit">OK PINJAM</button>
		</center>
		<br />
	</form>
    </div>

  </div>
</div>
<script type="text/javascript">
	function openPinjam() {
		document.getElementById('modalPinjam').style.display="block";
	}
	function closePinjam() {
		document.getElementById('modalPinjam').style.display="none";
	}
</script>
	<?php
}else{
	?>
<div class="w3-container w3-card-8 w3-blue">
	<h1>Detail Buku</h1>
</div>
<br />
<div style="margin-left: 20px">
<a href="?u=<?php echo $_GET['u'] ?>">
	<button class="w3-btn w3-red">< Back</button>
</a>
</div>
<center>
<h2 style="color: #fff">Sistem Operasi Jaringan Kelas 10</h2>
	<div class="div-daftar">
		<img src="img/2.jpg" class="img-daftar">
	</div>
</center>
<div class="div-keterangan">
	Buku ini adalah buku pelajaran kelas 10 semester 1 mata pelajaran sistem operasi jaringan.
</div>
<center>
	<button class="w3-btn w3-blue w3-large" onclick="openPinjam()">PINJAM</button>
</center>
<br />
<br />
<br />
<div id="modalPinjam" class="w3-modal">
  <div class="w3-modal-content w3-animate-top">

    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('modalPinjam').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <h2>Pinjam Buku</h2>
    </header>

    <div class="w3-container">
      <p>Isi Jumlah Peminjaman Buku</p>
	<form action="index.php?fungsi=pinjam" method="POST">
		<input type="hidden" name="buku" value="<?php echo $_GET['idx'] ?>">
		<input type="hidden" name="user" value="<?php echo $_GET['u'] ?>">
		<input type="text" onkeyup="angka(this)" name="jumlah" class="w3-input">
		<br />
		<center>
		<button class="w3-btn w3-blue w3-large" type="submit">OK PINJAM</button>
		</center>
		<br />
	</form>
    </div>

  </div>
</div>
<script type="text/javascript">
	function openPinjam() {
		document.getElementById('modalPinjam').style.display="block";
	}
	function closePinjam() {
		document.getElementById('modalPinjam').style.display="none";
	}
</script>
	<?php
}
?>