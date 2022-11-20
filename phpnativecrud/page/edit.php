<!-- cek process -->
<?php

require_once('function/connection.php');
require_once('function/helper.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;

if ($_SESSION['id'] == null) {
    header("Location: " . BASE_URL);
    exit();
}

$id = isset($_GET['id']) ? ($_GET['id']) : false;

$todolist = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM todolist WHERE id = $id"));

$error = isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;
?>



<form class="row g-3" method="POST" action="<?= BASE_URL . 'process/process_edit.php' ?>">
    <!-- alert -->
    <?php if ($error == 'true') : ?>
        <div class="alert alert-danger" role="alert">
            form tidak boleh kosong boy !!!
        </div>
    <?php endif; ?>
    <input name="id" value="<?= $todolist['id'] ?>" type="hidden">
    <div class="col-md-6">
        <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="<?= $todolist['nama_kegiatan'] ?>">
    </div>
    <div class="col-md-6">
        <label for="tanggal_kegiatan" class="form-label">Tgl Kegiatan</label>
        <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" value="<?= $todolist['tanggal_kegiatan'] ?>">
    </div>
    <div class="col-md-6">
        <label for="jam" class="form-label">Jam</label>
        <input type="time" class="form-control" id="jam" name="jam" value="<?= $todolist['jam'] ?>">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>