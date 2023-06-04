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
                    <?php $i = 1; foreach ($kerusakans as $kerusakan) : ?>
                        <?php if ($i < 2) : ?>
                            <li><?= $kerusakan['nama_kerusakan'] ?></li>
                        <?php endif; ?>
                        <?php $i++; ?>
                    <?php endforeach; ?>
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
                    <?php $i = 1; foreach ($gejalas as $gejala) : ?>
                        <?php if ($i < 5) : ?>
                            <li><?= $gejala['nama_gejala'] ?></li>
                        <?php endif; ?>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
        <hr>
        <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Penjelasan:</b><small> Berdasarkan gejala yang Anda berikan, sistem pakar mendiagnosis kerusakan pada 
                        <?php $i = 1; foreach ($kerusakans as $kerusakan) : ?>
                            <?php if ($i < 2) : ?>
                                <?= $kerusakan['nama_kerusakan'] ?> (<?= $kerusakan['kode_kerusakan'] ?>)
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php endforeach; ?>. Gejala yang Anda sebutkan, seperti 
                        <?php $i = 1; foreach ($gejalas as $gejala) : ?>
                            <?php if ($i <= 2) : ?>
                                <?= $gejala['nama_gejala'] ?>,
                            <?php endif; ?><?php $i++; ?>
                        <?php endforeach; ?> 
                        menunjukkan bahwa masalah terletak pada 
                        <?php $i = 1; foreach ($kerusakans as $kerusakan) : ?>
                            <?php if ($i < 2) : ?>
                                <?= $kerusakan['nama_kerusakan'] ?>
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php endforeach; ?> komputer.</small></h4>
                </div>
            </div>
        </div>
        <hr>
        <div class="m-2">
            <div class="d-flex text-justify">
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Solusi:</b></h4>
                    <ol>
                    <?php $i = 1; foreach ($solusis as $solusi) : ?>
                        <?php if ($i < 5) : ?>
                            <li><?= $solusi['nama_solusi'] ?></li>
                        <?php endif; ?>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>