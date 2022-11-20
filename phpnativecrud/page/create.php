<!-- cek process -->
<?php
$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>

<!-- alert -->
<?php if ($process == 'failed') : ?>
  <div class="alert alert-danger" role="alert">
    form tidak boleh kosong boy !!!
  </div>
<?php endif; ?>


<form class="row g-3" method="POST" action="<?= BASE_URL . 'process/process_create.php' ?>">
  <div class="col-md-6">
    <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan">
  </div>
  <div class="col-md-6">
    <label for="tanggal_kegiatan" class="form-label">Tgl Kegiatan</label>
    <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan">
  </div>
  <div class="col-md-6">
    <label for="jam" class="form-label">Jam</label>
    <input type="time" class="form-control" id="jam" name="jam">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>