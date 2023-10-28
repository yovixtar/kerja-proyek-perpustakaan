<?php
session_start();
include 'base/koneksi.php';

$sw_default = isset($_GET['fungsi']) ? $_GET['fungsi'] : null;
switch ($sw_default) {
  case 'login':
    include 'app/fungsi/login.php';
    break;
  case 'terpinjam':
    include 'app/fungsi/terpinjam.php';
    break;
  case 'hapuspinjaman':
    include 'app/fungsi/hapuspinjaman.php';
    break;
  case 'selesaipinjam':
    include 'app/fungsi/selesai_pinjam.php';
    break;
  case 'logout':
    include 'app/fungsi/logout.php';
    break;
  
  default:
    include 'app/default.php';
    break;
}
?>