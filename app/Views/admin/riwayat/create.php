<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Tambah Solusi
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Tambah Solusi</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('solusi/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kerusakan_id">ID Kerusakan</label>
                <input type="text" class="form-control" id="kerusakan_id" placeholder="Masukkan ID kerusakan" value="<?= old('kerusakan_id'); ?>" name="kerusakan_id" required autocomplete="kerusakan_id" autofocus>
                <?php if (session('errors.kerusakan_id')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.kerusakan_id') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="nama_solusi">Nama Solusi</label>
                <input type="text" class="form-control" id="nama_solusi" placeholder="Masukkan nama solusi" value="<?= old('nama_solusi'); ?>" name="nama_solusi" required autocomplete="nama_solusi">
                <?php if (session('errors.nama_solusi')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_solusi') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <!-- /.card-body -->
    </form>
</div>
<?= $this->endSection() ?>