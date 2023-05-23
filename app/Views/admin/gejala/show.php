<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Detail Gejala
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Detail Gejala</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label for="kode_gejala">Kode Gejala</label>
            <input type="text" class="form-control" id="kode_gejala" value="<?= $gejala['kode_gejala']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama_gejala">Nama Gejala</label>
            <input type="text" class="form-control" id="nama_gejala" value="<?= $gejala['nama_gejala']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="pertanyaan">Pertanyaan</label>
            <textarea class="form-control" id="pertanyaan" rows="4" readonly><?= $gejala['pertanyaan']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="bobot">Bobot</label>
            <input type="text" class="form-control" id="bobot" value="<?= $gejala['bobot']; ?>" readonly>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="<?= route_to('gejala'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>
<?= $this->endSection() ?>