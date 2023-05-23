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
                    <p>K8 Power Supply</p>
                </div>
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Tingkat Keyakinan</b></h4>
                    <p>75%</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="m-2">
            <div class="d-flex justify-content-between">
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Gejala Kerusakan</b></h4>
                    <ol>
                        <li>Kabel power mengalami goresan</li>
                        <li>Tidak ada indikasi daya masuk</li>
                    </ol>
                </div>
            </div>
        </div>
        <hr>
        <div class="m-2">
            <div class="d-flex">
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Penjelasan:</b><small> Berdasarkan gejala yang Anda berikan, sistem pakar mendiagnosis kerusakan pada Power Supply (K8). Gejala yang Anda sebutkan, seperti kabel power yang mengalami goresan dan tidak ada indikasi daya masuk, menunjukkan bahwa masalah terletak pada power supply komputer.</small></h4>
                </div>
            </div>
        </div>
        <hr>
        <div class="m-2">
            <div class="d-flex">
                <div class="d-flex mx-4 px-4 flex-column">
                    <h4><b>Solusi:</b></h4>
                    <ol>
                        <li>Periksa kabel power secara menyeluruh. Jika terdapat goresan atau kerusakan pada kabel, gantilah dengan kabel power yang baru dan pastikan terhubung dengan baik.</li>
                        <li>Periksa sumber daya listrik yang digunakan. Pastikan bahwa soket atau stopkontak yang digunakan berfungsi dengan baik.</li>
                        <li>Jika masalah masih persisten, kemungkinan besar power supply mengalami kerusakan dan perlu diganti. Silakan hubungi teknisi komputer untuk melakukan penggantian power supply yang sesuai.</li>
                    </ol>
                    <p>Penting untuk mendapatkan bantuan dari teknisi komputer yang berpengalaman jika Anda tidak memiliki pengetahuan atau pengalaman dalam melakukan perbaikan perangkat keras komputer.</p>
                    <p>Harap dicatat bahwa ini hanya merupakan contoh dan hasil sebenarnya dari sistem pakar akan bergantung pada pengetahuan dan aturan yang ada dalam sistem tersebut.</p>
                </div>
            </div>
        </div>


    </div>
</div>

<?= $this->endSection() ?>