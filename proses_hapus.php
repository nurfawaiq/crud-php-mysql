<?php 
include '+koneksi.php';
$id = $_GET['id'];
$query = mysql_query("DELETE FROM kendaraan WHERE id = '$id'") or die(mysql_error());
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='index.php';</script>";
}
?>