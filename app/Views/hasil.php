<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?>
Hasil Diagnosa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header bg-gray">
        <h3>Hasil Diagnosis</h3>
    </div>
    <div class="card-body">
        <div class="text-center mb-3">
            <h3 class="mb-3">Berdasarkan gejala terpilih, berikut hasil analisis kerusakan laptop anda dengan merk <?= $merk_laptop ?>, tipe <?= $tipe_laptop ?></h3>
            <hr>
            <div class="d-flex justify-content-between">
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Jenis Kerusakan</b></h4>
                    <ul>
                        <?php foreach ($kerusakans as $kerusakan) : ?>
                        <li><?= $kerusakan['nama_kerusakan'] ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Tingkat Keyakinan</b></h4>
                    <p><?= $persentase ?>%</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="m-2">
            <div class="d-flex justify-content-between">
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Gejala Kerusakan</b></h4>
                    <ol>
                        <li><?= $gejalas['nama_gejala'] ?></li>
                    </ol>
                </div>
            </div>
        </div>
        <hr>
        <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Penjelasan:</b><small> Berdasarkan gejala yang Anda berikan, sistem pakar mendiagnosis kerusakan pada <?= $kerusakans[0]['nama_kerusakan'] ?> (<?= $kerusakans[0]['kode_kerusakan'] ?>). Gejala yang Anda sebutkan, seperti <?= $gejalas['nama_gejala'] ?>, menunjukkan bahwa masalah terletak pada <?= $kerusakans[0]['nama_kerusakan'] ?> komputer.</small></h4>
                </div>
            </div>
        </div>
        <hr>
        <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Solusi:</b></h4>
                    <ol>
                        <?php foreach ($solusis[0] as $solusi) : ?>
                            <li><?= $solusi['nama_solusi'] ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
