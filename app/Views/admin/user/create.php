<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Tambah User
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Tambah User</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('user/store'); ?>">
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control <?= session('errors.nama') ? 'is-invalid' : ''; ?>" id="nama" placeholder="Masukkan nama user" value="<?= old('nama'); ?>" name="nama" required autocomplete="nama" autofocus>
                <?php if (session('errors.nama')) : ?>
                    <div class="invalid-feedback"><?= session('errors.nama') ?></div>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control <?= session('errors.email') ? 'is-invalid' : ''; ?>" id="email" placeholder="Masukkan email user" value="<?= old('email'); ?>" name="email" required autocomplete="email">
                <?php if (session('errors.email')) : ?>
                    <div class="invalid-feedback"><?= session('errors.email') ?></div>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" class="form-control <?= session('errors.password') ? 'is-invalid' : ''; ?>" id="password" placeholder="Masukkan kata sandi user" name="password" required autocomplete="new-password">
                <?php if (session('errors.password')) : ?>
                    <div class="invalid-feedback"><?= session('errors.password') ?></div>
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