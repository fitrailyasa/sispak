<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Edit Kerusakan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Edit Kerusakan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('kerusakan/update', $kerusakan['id']); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_kerusakan">Kode Kerusakan</label>
                <input type="text" class="form-control" id="kode_kerusakan" value="<?= $kerusakan['kode_kerusakan']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama_kerusakan">Nama Kerusakan</label>
                <input type="text" class="form-control <?= session('errors.nama_kerusakan') ? 'is-invalid' : ''; ?>" id="nama_kerusakan" value="<?= old('nama_kerusakan') ?: $kerusakan['nama_kerusakan']; ?>" name="nama_kerusakan" required autofocus>
                <?php if (session('errors.nama_kerusakan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_kerusakan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="solusi">Solusi</label>
                <textarea class="form-control <?= session('errors.solusi') ? 'is-invalid' : ''; ?>" id="solusi" rows="4" name="solusi" required><?= old('solusi') ?: $kerusakan['solusi']; ?></textarea>
                <?php if (session('errors.solusi')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.solusi') ?></strong>
                    </span>
                <?php endif ?>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= route_to('kerusakan'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>