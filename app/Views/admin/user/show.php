<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Detail User
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary m-2">
    <div class="card-header">
        <h3 class="card-title">Detail User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" value="<?= $user['nama']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="<?= $user['email']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="created_at">Tanggal Dibuat</label>
            <input type="text" class="form-control" id="created_at" value="<?= $user['created_at']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="updated_at">Terakhir Diperbarui</label>
            <input type="text" class="form-control" id="updated_at" value="<?= $user['updated_at']; ?>" readonly>
        </div>
        <a href="<?= route_to('user'); ?>" class="btn btn-primary">Kembali</a>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>