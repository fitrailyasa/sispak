<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Edit Gejala
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Edit Gejala</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('gejala/update', $gejala['id']); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_gejala">Kode Gejala</label>
                <input type="text" class="form-control" id="kode_gejala" value="<?= $gejala['kode_gejala']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama_gejala">Nama Gejala</label>
                <input type="text" class="form-control <?= session('errors.nama_gejala') ? 'is-invalid' : ''; ?>" id="nama_gejala" value="<?= old('nama_gejala') ?: $gejala['nama_gejala']; ?>" name="nama_gejala" required autofocus>
                <?php if (session('errors.nama_gejala')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_gejala') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="pertanyaan">Pertanyaan</label>
                <textarea class="form-control <?= session('errors.pertanyaan') ? 'is-invalid' : ''; ?>" id="pertanyaan" rows="4" name="pertanyaan" required><?= old('pertanyaan') ?: $gejala['pertanyaan']; ?></textarea>
                <?php if (session('errors.pertanyaan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.pertanyaan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="bobot">Bobot</label>
                <input type="number" class="form-control <?= session('errors.bobot') ? 'is-invalid' : ''; ?>" id="bobot" value="<?= old('bobot') ?: $gejala['bobot']; ?>" name="bobot" required>
                <?php if (session('errors.bobot')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.bobot') ?></strong>
                    </span>
                <?php endif ?>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= route_to('gejala'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>