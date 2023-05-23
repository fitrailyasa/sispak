<?= $this->extend('layouts/admin/app') ?>

<?= $this->section('title') ?>
Edit User
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Edit User</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="<?= route_to('user/update', $user['id']); ?>">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="PUT">
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama user" value="<?= $user['nama']; ?>" name="nama" required autocomplete="nama" autofocus>
                <?php if (session('errors.nama')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.nama') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control <?= session('errors.email') ? 'is-invalid' : ''; ?>" id="email" placeholder="Masukkan email user" value="<?= $user['email']; ?>" name="email" required autocomplete="email" autofocus>
                <?php if (session('errors.email')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.email') ?></strong>
                    </span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" class="form-control <?= session('errors.password') ? 'is-invalid' : ''; ?>" id="password" placeholder="Masukkan kata sandi user" name="password" autocomplete="new-password">
                <?php if (session('errors.password')) : ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?= session('errors.password') ?></strong>
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