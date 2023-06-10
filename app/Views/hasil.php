<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?>
Hasil Diagnosa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header bg-gray">
        <h4><a class="text-white pr-3" href="<?= route_to('diagnosis') ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>Hasil Diagnosis</h4>
    </div>
    <div class="card-body">
        <div class="m-2">
            <h4 class="text-center mb-3">Berdasarkan gejala terpilih, berikut hasil analisis kerusakan laptop anda dengan merk <?= $merk_laptop ?>, tipe <?= $tipe_laptop ?></h4>
            <hr>
            <div class="d-flex justify-content-between">
                <div class="d-flex mx-4 flex-column">
                    <h5><b>Jenis Kerusakan</b></h5>
                    <ol>
                        <?php foreach ($kerusakans as $kerusakan) : ?>
                            <li><?= $kerusakan['nama_kerusakan'] ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
                <div class="d-flex mx-4 flex-column">
                    <h5><b>Tingkat Keyakinan</b></h5>
                    <p class="text-center"><?= $persentase ?>%</p>
                </div>
            </div>
        </div>
        <div class="m-2">
            <div class="d-flex justify-content-between">
                <div class="d-flex mx-4 flex-column">
                    <h5><b>Gejala Kerusakan</b></h5>
                    <ol>
                        <li><?= $gejalas['nama_gejala'] ?></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 flex-column">
                    <h5><b>Penjelasan:</b><small> Berdasarkan gejala yang Anda berikan, sistem pakar mendiagnosis kerusakan pada <?= $kerusakans[0]['nama_kerusakan'] ?> (<?= $kerusakans[0]['kode_kerusakan'] ?>). Gejala yang Anda sebutkan, seperti <?= $gejalas['nama_gejala'] ?>, menunjukkan bahwa masalah terletak pada <?= $kerusakans[0]['nama_kerusakan'] ?> komputer.</small></h5>
                </div>
            </div>
        </div>
        <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 flex-column">
                    <h5><b>Solusi:</b></h5>
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
