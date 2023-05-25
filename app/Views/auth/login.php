<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-5">

            <h2><?php echo lang('Auth.login_heading');?></h2>

            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <form action="auth/login" method="post">
                <div class="form-group mb-3">
                    <label for="email"><?php echo form_label(lang('Auth.login_identity_label'), 'identity');?></label>
                    <input type="email" name="email" placeholder="Email" value="" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="password"><?php echo form_label(lang('Auth.login_password_label'), 'password');?></label>
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="d-grid">
                    <button type="submit" name="login" class="btn btn-primary"><?php echo form_submit('submit', lang('Auth.login_submit_btn'));?></button>
                </div>
            </form>
        </div>

    </div>
</div>
<?= $this->endSection() ?>