<h1 style="margin-left: 30px">Peminjaman</h1>
<center>
<div class="w3-responsive table-area">
<table class="w3-table-all w3-hoverable w3-card-4">
  <thead>
    <tr class="w3-blue">
      <th>Buku</th>
      <th>Nama Siswa</th>
      <th>Jumlah</th>
      <th>Aksi</th>
    </tr>
  </thead>
<?php
$stat = mysqli_query($l, "SELECT * FROM pinjaman p JOIN buku b ON p.buku_p=b.id_b JOIN siswa s ON p.user_p=s.nis_s WHERE status_p=2");
while ($data=mysqli_fetch_array($stat)) {
?>
  <tr>
    <td><?php echo $data['nama_b'] ?></td>
    <td><?php echo $data['nama_s'] ?></td>
    <td><?php echo $data['jumlah_p'] ?></td>
    <td><a href="index.php?fungsi=selesaipinjam&idx=<?php echo $data['id_p'] ?>"><button class="w3-btn w3-blue">Selesai</button></a>
  </tr>
<?php
};
?>
</table>
</div>
</center>