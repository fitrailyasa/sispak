<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\GejalaModel;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        $gejalaData = [
            ['kode_gejala' => 'G1', 'nama_gejala' => 'Tombol hidup tapi tidak ada gambar yang ditampilkan terpantau', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G2', 'nama_gejala' => 'Terdapat garis horizontal / vertikal di monitor', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G3', 'nama_gejala' => 'Tidak ada tampilan awal bios', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G4', 'nama_gejala' => 'Muncul pesan Error pada bios (pesan selalu berbeda tergantung kondisi tertentu)', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G5', 'nama_gejala' => 'Alarm bios berbunyi', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G6', 'nama_gejala' => 'Terdengar suara aneh di HDD', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G7', 'nama_gejala' => 'Sering hang/crash saat menjalankan aplikasi', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G8', 'nama_gejala' => 'Selalu pindai disk saat boot', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G9', 'nama_gejala' => 'Muncul pesan error saat menjalankan aplikasi', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G10', 'nama_gejala' => 'Informasi driver perangkat tidak terdeteksi di manajer perangkat, meskipun driver telah diinstal', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G11', 'nama_gejala' => 'Tiba-tiba OS restart otomatis', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G12', 'nama_gejala' => 'Keluarnya blue screen pada OS (pesan selalu berbeda tergantung kondisi tertentu)', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G13', 'nama_gejala' => 'Suara tetap keluar meskipun driver perangkat dan pengaturan telah dilakukan sesuai dengan instruksi', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G14', 'nama_gejala' => 'Muncul pesan error saat menjalankan aplikasi audio', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G15', 'nama_gejala' => 'Muncul pesan kesalahan saat pertama kali OS dimuat dari HDD', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G16', 'nama_gejala' => 'Tidak ada tanda-tanda sebagain/seluruh alat berfungsi (semua kipas pendingin tidak berputar)', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G17', 'nama_gejala' => 'Sering mati mendadak tanpa sebab', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G18', 'nama_gejala' => 'Muncul pesan di windows, bahwa windows virtual memory kekurangan', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G19', 'nama_gejala' => 'Aplikasi berjalan dengan lambat, respons yang lambat terhadap input', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G20', 'nama_gejala' => 'Performa grafis sangat berat (biasanya di internet terbuka dan manipulasi gambar)', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G21', 'nama_gejala' => 'Perangkat tidak terdeteksi di bios', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G22', 'nama_gejala' => 'Deteksi informasi salah di bios', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G23', 'nama_gejala' => 'Bagian dari perangkatnya berfungsi', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G24', 'nama_gejala' => 'Sebagian / seluruh karakter input mati', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G25', 'nama_gejala' => 'Pointer mouse tidak merespon gerakan mouse', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G26', 'nama_gejala' => 'Sebagian / seluruh karakter input mati', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G27', 'nama_gejala' => 'Keluar bip panjang saat laptop dihidupkan', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G28', 'nama_gejala' => 'Dihidupkan agak susah', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G29', 'nama_gejala' => 'Kabel power mengalami goresan', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G30', 'nama_gejala' => 'Tidak ada indikasi daya masuk', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G31', 'nama_gejala' => 'Mati total', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G32', 'nama_gejala' => 'Posisi komputer hidup dan kemudian tiba-tiba layar mati', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G33', 'nama_gejala' => 'Bunyi bip keluar berulang kali', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G34', 'nama_gejala' => 'Lupakan sampai sistem operasi telah di-restart lagi', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G35', 'nama_gejala' => 'Kipas power supply tidak berputar', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G36', 'nama_gejala' => 'Kipas power supply dan kipas prosesor berputar', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G37', 'nama_gejala' => 'CD / DVD / ROM / RW tidak terdeteksi di OS', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G38', 'nama_gejala' => 'CD / DVD / ROM / RW drive yang tidak bisa keluar CD', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G39', 'nama_gejala' => 'Pesan "Kesalahan checksum BIOS ROM - Sistem dihentikan"', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G40', 'nama_gejala' => 'Sistem Operasi Tidak Muncul', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G41', 'nama_gejala' => 'Saat di tekan tombol power tidak menyala', 'bobot' => 1, 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
        ];

        $model = new GejalaModel();
        $model->insertBatch($gejalaData);
    }
}
