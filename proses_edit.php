<?php 
include '+koneksi.php';

$id = $_POST['id'];
$jenis_kendaraan = $_POST['jenis'];
$merk_kendaraan= $_POST['merk'];
$warna_kendaraan= $_POST['warna'];
$tahun= $_POST['tahun'];
$bahan_bakar = $_POST['bbm'];
$nomor_polisi= $_POST['nopol'];
$nomor_rangka = $_POST['norangka'];
$nomor_mesin= $_POST['nomesin'];
$pemilik = $_POST['pemilik'];
$alamat_pemilik = $_POST['alamat'];

$query = mysql_query("UPDATE kendaraan SET jenis='$jenis_kendaraan', merk='$merk_kendaraan', warna='$warna_kendaraan', tahun='$tahun', bbm='$bahan_bakar', nopol='$nomor_polisi', norangka='$nomor_rangka', nomesin='$nomor_mesin', pemilik='$pemilik', alamat='$alamat_pemilik' WHERE id='$id'") or die(mysql_error());

if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
?>