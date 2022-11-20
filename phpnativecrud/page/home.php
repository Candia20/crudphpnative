<!-- cek process -->
<?php

require_once('function/connection.php');


$process = isset($_GET['process']) ? ($_GET['process']) : false;
$status = isset($_GET['status']) ? ($_GET['status']) : false;
?>

<!-- alert -->
<?php if ($process == 'success') : ?>
  <div class="alert alert-success" role="alert">
    data berhasil masuk boy : )
  </div>
<?php endif; ?>

<?php if ($status == 'success') : ?>
  <div class="alert alert-success" role="alert">
    data berhasil dihapus boy : )
  </div>
<?php endif; ?>


<!-- mengambil data dari mysql untuk tabel -->
<?php 

$todolist = mysqli_query($conn, "SELECT * FROM todolist");

?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Kegiatan</th>
            <th scope="col">Tanggal Kegiatan</th>
            <th scope="col">Jam</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach($todolist as $key) : ?>
        <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $key['nama_kegiatan'] ?></td>
            <td><?= $key['tanggal_kegiatan'] ?></td>
            <td><?= $key['jam'] ?></td>
            <td>
                <a class="btn btn-info badge" href="<?= BASE_URL . 'dashboard.php?page=edit&id=' . $key['id'] ?>">Edit</a>
                <a class="btn btn-danger badge" href="<?= BASE_URL . 'process/process_delete.php?id=' . $key['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>