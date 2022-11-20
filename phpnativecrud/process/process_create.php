<?php 
require_once('../function/helper.php');
require_once('../function/connection.php');

$nama_kegiatan = $_POST['nama_kegiatan'];
$tanggal_kegiatan = $_POST['tanggal_kegiatan'];
$jam = $_POST['jam'];

// cek kelengkapan data
if (empty($nama_kegiatan) || empty($tanggal_kegiatan) || empty($jam)) {
    header("location: " . BASE_URL . 'dashboard.php?page=create&process=failed');
} else {
    mysqli_query($conn, "INSERT INTO todolist(nama_kegiatan, tanggal_kegiatan, jam) VALUES ('$nama_kegiatan', '$tanggal_kegiatan', '$jam')");
    header("location: " . BASE_URL . 'dashboard.php?page=home&process=success');
}

?>