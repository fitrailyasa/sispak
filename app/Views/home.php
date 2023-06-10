<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Beranda
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="text-center">
    <h1>Selamat Datang di Sistem Pakar <br> Diagnosa Kerusakan Laptop</h1>
    <h4>Solusi cepat mengetahui kerusakan laptop anda!</h4>
</div>
<div class="m-4">
    <h3>Cara Penggunaan</h3>
</div>
<div>
    <ol>
        <li>
            Anda akan diberikan sejumlah pertanyaan dengan berbagai macam gejala kerusakan laptop.
        </li>
        <li>
            Pada setiap pertanyaan akan ada nama gejala dan pilihan intensitas gejala kerusakan itu muncul diantaranya 1. tidak ada, 2. jarang, 3. cukup sering, 4. sering, 5. sangat sering.
        </li>
        <li>
            Setelah mengisi semua pertanyaan harap periksa kembali jawaban anda sesuai dengan gejala kerusakan yang dialami laptop anda dan tekan tombol centang.
        </li>
        <li>
            Hasil diagnosis akan muncul dengan memberikan informasi seperti nama kerusakan, gejala dari kerusakan, persentase keyakinan terhadap kerusakan, dan solusi yang bisa dilakukan oleh anda dirumah sebelum menemui teknisi laptop.
        </li>
    </ol>
</div>
<div class="text-center mb-3">
    <a class="btn btn-dark text" href="/diagnosis">Mulai</a>
</div>
<?= $this->endSection() ?>