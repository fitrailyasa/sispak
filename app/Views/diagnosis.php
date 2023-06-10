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
        <input type="text" name="merk_laptop"> <br>
        <label for="tipe_laptop">Tipe Laptop : </label>
        <input type="hidden" name="kode_kerusakan" value="K1">
        <input type="text" name="tipe_laptop"> <br>
            <?php $i = 1; foreach ($gejalas as $gejala) : ?>
                <label for="gejala"><?= $i++ ?>. <?= $gejala['nama_gejala'] ?></label><br>
                <?php foreach ($cfPenggunas as $cf_pengguna) : ?>
                    <p><input type="radio" name="bobot<?= $gejala['kode_gejala'] ?>" value="<?= $cf_pengguna['bobot_pengguna'] ?>"><?= $cf_pengguna['certainty_term'] ?></p>
                <?php endforeach; ?>
                <br>
            <?php endforeach; ?>

            <input type="submit" class="btn btn-dark" value="Submit">
        </form>
    </div>
</div>
<?= $this->endSection() ?>