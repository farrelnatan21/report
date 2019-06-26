<?php
include '../../config/koneksi.php';

$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$topik = $_POST['topik'];
$tanggal = $_POST['tanggal'];
$gambar = $_FILES['gambar']['name'];
$deskripsi = $_POST['deskripsi'];
$koneksi->query("INSERT INTO konten(id_user,nama,topik,tanggal,gambar,deskripsi) VALUES('$id_user','$nama','$topik','$tanggal','$gambar','$deskripsi')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'../user/images/'.$gambar);
header('location:../../pages/admin/?p=konten');
?>