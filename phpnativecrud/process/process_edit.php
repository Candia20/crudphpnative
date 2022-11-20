<?php 
require_once('../function/helper.php');
require_once('../function/connection.php');

$nama_kegiatan = $_POST['nama_kegiatan'];
$tanggal_kegiatan = $_POST['tanggal_kegiatan'];
$jam = $_POST['jam'];
$id = $_POST['id'];

// cek kelengkapan data
if (empty($nama_kegiatan) || empty($tanggal_kegiatan) || empty($jam)) {
    header("location: " . BASE_URL . 'dashboard.php?page=edit&id=' . $id . '&emptyform=true');
} else {
    mysqli_query($conn, "UPDATE todolist SET nama_kegiatan = '$nama_kegiatan', tanggal_kegiatan = '$tanggal_kegiatan', 
    jam = '$jam' WHERE id='$id'");
    header("location: " . BASE_URL . 'dashboard.php?page=home&process=success');
}

?>