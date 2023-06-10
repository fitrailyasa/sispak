<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Diagnosa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="text-center">
    <h3><b>Diagnosa Kerusakan</b></h3>
    <h4>Solusi cepat mengetahui kerusakan laptop anda!</h4>
</div>
<div class="card">
    <div class="card-header bg-gray p-4">
        <h3 class="mx-4">Daftar Gejala</h3>
    </div>
    <div class="card-body p-4 mx-4">
        <form action="<?= route_to('diagnosis/hasil') ?>" method="POST">
        <label for="merk_laptop">Merk Laptop : </label>
        <input class="form-control" type="text" name="merk_laptop" value="<?= old('merk_laptop'); ?>" placeholder="merk laptop anda (wajib)"> <br>
        <label for="tipe_laptop">Tipe Laptop : </label>
        <input class="form-control" type="text" name="tipe_laptop" value="<?= old('tipe_laptop'); ?>" placeholder="tipe laptop anda (wajib)"> <br>
        <input type="hidden" name="kode_kerusakan" value="K1">
        <?php $i = 1; foreach ($gejalas as $gejala) : ?>
            <div class="card p-3">
                <label for="gejala"><?= $i++ ?>. <?= $gejala['nama_gejala'] ?></label><br>
                <?php foreach ($cfPenggunas as $cf_pengguna) : ?>
                    <p><input type="radio" name="<?= $gejala['kode_gejala'] ?>" value="<?= $cf_pengguna['bobot_pengguna'] ?>"><?= $cf_pengguna['certainty_term'] ?></p>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>     
            <input type="submit" class="btn btn-dark" value="Submit">
        </form>
    </div>
</div>
<?= $this->endSection() ?>