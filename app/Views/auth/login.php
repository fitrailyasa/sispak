<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-5">

            <h2>Login</h2>

            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <form action="#" method="post">
                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email" value="" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                </div>
            </form>
        </div>

    </div>
</div>
<?= $this->endSection() ?>