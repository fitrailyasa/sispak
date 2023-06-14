<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\GejalaModel;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        $gejalaData = [
            ['kode_gejala' => 'G01', 'nama_gejala' => 'Tombol hidup tapi tidak ada gambar yang ditampilkan terpantau', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G02', 'nama_gejala' => 'Terdapat garis horizontal / vertikal di monitor', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G03', 'nama_gejala' => 'Tidak ada tampilan awal bios', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G04', 'nama_gejala' => 'Muncul pesan Error pada bios (pesan selalu berbeda tergantung kondisi tertentu)', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G05', 'nama_gejala' => 'Alarm bios berbunyi', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G06', 'nama_gejala' => 'Terdengar suara aneh di HDD', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G07', 'nama_gejala' => 'Sering hang/crash saat menjalankan aplikasi', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G08', 'nama_gejala' => 'Selalu pindai disk saat boot', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G09', 'nama_gejala' => 'Muncul pesan error saat menjalankan aplikasi', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G10', 'nama_gejala' => 'Informasi driver perangkat tidak terdeteksi di manajer perangkat, meskipun driver telah diinstal', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G11', 'nama_gejala' => 'Tiba-tiba OS restart otomatis', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G12', 'nama_gejala' => 'Keluarnya blue screen pada OS (pesan selalu berbeda tergantung kondisi tertentu)', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G13', 'nama_gejala' => 'Suara tetap keluar meskipun driver perangkat dan pengaturan telah dilakukan sesuai dengan instruksi', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G14', 'nama_gejala' => 'Muncul pesan error saat menjalankan aplikasi audio', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G15', 'nama_gejala' => 'Muncul pesan kesalahan saat pertama kali OS dimuat dari HDD', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            // ['kode_gejala' => 'G16', 'nama_gejala' => 'Tidak ada tanda-tanda sebagain/seluruh alat berfungsi (semua kipas pendingin tidak berputar)', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            // ['kode_gejala' => 'G17', 'nama_gejala' => 'Sering mati mendadak tanpa sebab', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G18', 'nama_gejala' => 'Muncul pesan di windows, bahwa windows virtual memory kekurangan', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G19', 'nama_gejala' => 'Aplikasi berjalan dengan lambat, respons yang lambat terhadap input', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G20', 'nama_gejala' => 'Performa grafis sangat berat (biasanya di internet terbuka dan manipulasi gambar)', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G21', 'nama_gejala' => 'Perangkat tidak terdeteksi di bios', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G22', 'nama_gejala' => 'Deteksi informasi salah di bios', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G23', 'nama_gejala' => 'Bagian dari perangkatnya berfungsi', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G24', 'nama_gejala' => 'Sebagian / seluruh karakter input mati', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G25', 'nama_gejala' => 'Pointer mouse tidak merespon gerakan mouse', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G26', 'nama_gejala' => 'Sebagian / seluruh karakter input mati', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G27', 'nama_gejala' => 'Keluar bip panjang saat laptop dihidupkan', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G28', 'nama_gejala' => 'Dihidupkan agak susah', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G29', 'nama_gejala' => 'Kabel power mengalami goresan', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G30', 'nama_gejala' => 'Tidak ada indikasi daya masuk', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G31', 'nama_gejala' => 'Mati total', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G32', 'nama_gejala' => 'Posisi komputer hidup dan kemudian tiba-tiba layar mati', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G33', 'nama_gejala' => 'Bunyi bip keluar berulang kali', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G34', 'nama_gejala' => 'Lupakan sampai sistem operasi telah di-restart lagi', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            // ['kode_gejala' => 'G35', 'nama_gejala' => 'Kipas power supply tidak berputar', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G36', 'nama_gejala' => 'Kipas power supply dan kipas prosesor berputar', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G37', 'nama_gejala' => 'CD / DVD / ROM / RW tidak terdeteksi di OS', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G38', 'nama_gejala' => 'CD / DVD / ROM / RW drive yang tidak bisa keluar CD', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G39', 'nama_gejala' => 'Pesan "Kesalahan checksum BIOS ROM - Sistem dihentikan"', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G40', 'nama_gejala' => 'Sistem Operasi Tidak Muncul', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
            ['kode_gejala' => 'G41', 'nama_gejala' => 'Saat di tekan tombol power tidak menyala', 'created_at' => '2021-12-12 12:12:12', 'updated_at' => '2021-12-12 12:12:12'],
        ];
        $this->db->table('gejala')->insertBatch($gejalaData);
    }
}
