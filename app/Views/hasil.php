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
            <h3 class="mb-3">Berdasarkan gejala terpilih, berikut hasil analisis kerusakan laptop anda</h3>
            <hr>
            <div class="d-flex justify-content-between">
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Jenis Kerusakan</b></h4>
                    <ul>
                        <li><?= $kerusakans['nama_kerusakan'] ?></li>
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
                    <h4><b>Penjelasan:</b><small> Berdasarkan gejala yang Anda berikan, sistem pakar mendiagnosis kerusakan pada <?= $kerusakans['nama_kerusakan'] ?> (<?= $kerusakans['kode_kerusakan'] ?>). Gejala yang Anda sebutkan, seperti <?= $gejalas['nama_gejala'] ?>, menunjukkan bahwa masalah terletak pada <?= $kerusakans['nama_kerusakan'] ?> komputer.</small></h4>
                </div>
            </div>
        </div>
        <hr>
        <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Solusi:</b></h4>
                    <ol>
                        <?php foreach ($solusis as $solusi) : ?>
                            <li><?= $solusi['nama_solusi'] ?></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>