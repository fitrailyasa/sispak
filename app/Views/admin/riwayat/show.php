<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Detail Riwayat Diagnosis
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Detail Riwayat Diagnosis</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label for="token">Token</label>
            <input type="text" class="form-control" id="token" value="<?= $riwayat['token']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="merk_laptop">Merk Laptop</label>
            <input type="text" class="form-control" id="merk_laptop" value="<?= $riwayat['merk_laptop']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tipe_laptop">Tipe Laptop</label>
            <input type="text" class="form-control" id="tipe_laptop" value="<?= $riwayat['tipe_laptop']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="kode_kerusakan">Kerusakan</label>
            <input type="text" class="form-control" id="kode_kerusakan" value="<?= $riwayat['kode_kerusakan']; ?>" readonly>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('riwayat'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>