<?php
session_start();
include 'base/koneksi.php';

$sw_default = isset($_GET['fungsi']) ? $_GET['fungsi'] : null;
switch ($sw_default) {
  case 'login':
    include 'app/fungsi/login.php';
    break;
  case 'sandibaru':
    include 'app/fungsi/sandibaru.php';
    break;
  case 'pinjam':
    include 'app/fungsi/pinjam.php';
    break;
  
  default:
    include 'app/default.php';
    break;
}
?>