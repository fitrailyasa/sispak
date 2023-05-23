<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Diagnosa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="text-center">
    <h3><b>Diagnosa Kerusakan</b></h3>
    <h4>Solusi cepat mengetahui kerusakan laptop anda!</h4>

    <form action="<?= route_to('diagnosis/hasil') ?>" method="POST">
        <label for="gejala">Pilih Gejala:</label><br>
        <input type="checkbox" name="gejala[]" value="G1"> Gejala 1<br>
        <input type="checkbox" name="gejala[]" value="G2"> Gejala 2<br>
        <input type="checkbox" name="gejala[]" value="G3"> Gejala 3<br>
        <input type="checkbox" name="gejala[]" value="G4"> Gejala 4<br>
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php $i = 1;
    foreach ($gejalas as $gejala) : ?>
        <p>
            <?= $gejala['nama_gejala'] ?>
        </p>
        <p>
            <?= $gejala['pertanyaan'] ?>
        </p>
    <?php endforeach; ?>
</div>
<div class="m-4">

</div>
<?= $this->endSection() ?>