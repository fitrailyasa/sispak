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
            <?php $i = 1;
            foreach ($gejalas as $gejala) : ?>
                <label for="gejala"><?= $i++ ?>. <?= $gejala['nama_gejala'] ?></label><br>
                <p><input type="radio" name="bobot" value="0"> Tidak Ada</p>
                <p><input type="radio" name="bobot" value="0.25"> Jarang</p>
                <p><input type="radio" name="bobot" value="0.5"> Cukup Sering</p>
                <p><input type="radio" name="bobot" value="0.75"> Sering</p>
                <p><input type="radio" name="bobot" value="1"> Sangat Sering</p>
                <br>
            <?php endforeach; ?>

            <input type="submit" class="btn btn-dark" value="Submit">
        </form>
    </div>
</div>
<?= $this->endSection() ?>