<?php 
include '+koneksi.php';

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

$query = mysql_query("INSERT INTO kendaraan (jenis, merk, warna, tahun, bbm, nopol, norangka, nomesin, pemilik, alamat) VALUES ('$jenis_kendaraan', '$merk_kendaraan', '$warna_kendaraan', '$tahun', '$bahan_bakar', '$nomor_polisi', '$nomor_rangka', '$nomor_mesin', '$pemilik', '$alamat_pemilik')") or die(mysql_error());

if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>