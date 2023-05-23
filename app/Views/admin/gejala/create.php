<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Tambah Gejala
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Tambah Gejala</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('gejala/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_gejala">Kode Gejala</label>
                <input type="text" class="form-control" id="kode_gejala" placeholder="Masukkan kode gejala" value="<?= old('kode_gejala'); ?>" name="kode_gejala" required autocomplete="kode_gejala" autofocus>
                <?php if (session('errors.kode_gejala')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.kode_gejala') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="nama_gejala">Nama Gejala</label>
                <input type="text" class="form-control" id="nama_gejala" placeholder="Masukkan nama gejala" value="<?= old('nama_gejala'); ?>" name="nama_gejala" required autocomplete="nama_gejala">
                <?php if (session('errors.nama_gejala')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama_gejala') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="pertanyaan">Pertanyaan</label>
                <textarea class="form-control" id="pertanyaan" placeholder="Masukkan pertanyaan" name="pertanyaan" required><?= old('pertanyaan'); ?></textarea>
                <?php if (session('errors.pertanyaan')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.pertanyaan') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="bobot">Bobot</label>
                <input type="number" class="form-control" id="bobot" placeholder="Masukkan bobot" value="<?= old('bobot'); ?>" name="bobot" required>
                <?php if (session('errors.bobot')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.bobot') ?></strong>
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