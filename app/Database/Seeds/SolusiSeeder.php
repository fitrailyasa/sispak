<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\SolusiModel;

class SolusiSeeder extends Seeder
{
    public function run()
    {
        $solusiData = [
            [
                "kerusakan_id" => 1,
                "nama_solusi" => "Solusi pertama bisa mematikan komputer dengan hard booting mati dan tekan beberapa detik untuk menghapus kapasitas pengisian dan kemudian hidupkan. Jika masih menunjukkan gejala kerusakan, maka bisa terjadi kerusakan hardware, periksa konektornya."
            ],
            [
                "kerusakan_id" => 1,
                "nama_solusi" => "Solusi LCD buram untuk mengatasinya bisa dilakukan hanya dengan mengganti monitor tabung sinar katoda."
            ],
            [
                "kerusakan_id" => 1,
                "nama_solusi" => "Untuk warna yang kurang lengkap bisa ganti mainboard atau ganti VGA kabel."
            ],
            [
                "kerusakan_id" => 2,
                "nama_solusi" => "Coba bersihkan RAM menggunakan penghapus dengan menyikat kuningan di RAM."
            ],
            [
                "kerusakan_id" => 2,
                "nama_solusi" => "Periksa RAM yang anda gunakan jika itu adalah jenis komputer yang anda gunakan."
            ],
            [
                "kerusakan_id" => 3,
                "nama_solusi" => "Periksa hubungan hard drive dengan soket."
            ],
            [
                "kerusakan_id" => 3,
                "nama_solusi" => "Periksa apakah harddisk berbunyi jika demikian kemungkinan ada sektor yang rusak, segera buat cadangan data anda sebelum hard drive mati total, dan siapkan harddisk baru."
            ],
            [
                "kerusakan_id" => 4,
                "nama_solusi" => "Matikan komputer dan cabut kartu VGA, lalu pasang kembali hati-hati dan pastikan terpasang dengan benar."
            ],
            [
                "kerusakan_id" => 4,
                "nama_solusi" => "Jika anda menggunakan kartu VGA On Board bentrok dengan motherboard, anda harus menonaktifkan fungsi On Board VGA BIOS."
            ],
            [
                "kerusakan_id" => 4,
                "nama_solusi" => "Jika tidak bisa diperbaiki secara manual, sebaiknya segera bawa ke service center terdekat atau dengan mengganti motherboard."
            ],
            [
                "kerusakan_id" => 5,
                "nama_solusi" => "Instal ulang driver sound card dan pastikan sound card terpasang dengan benar di dalam slot."
            ],
            [
                "kerusakan_id" => 5,
                "nama_solusi" => "Pastikan konektor kabel terpasang dengan benar."
            ],
            [
                "kerusakan_id" => 5,
                "nama_solusi" => "Jika ada kabel yang putus maka segera ganti kabel penghubung yang putus dengan yang baru."
            ],
            [
                "kerusakan_id" => 5,
                "nama_solusi" => "Cara lain adalah dengan mengganti sound card atau speaker dengan yang baru."
            ],
            [
                "kerusakan_id" => 6,
                "nama_solusi" => "Periksa apakah kabel harddisk sudah terpasang."
            ],
            [
                "kerusakan_id" => 6,
                "nama_solusi" => "Apakah komputer bersih dari virus, jika tidak silahkan bersihkan virus atau instal ulang."
            ],
            [
                "kerusakan_id" => 6,
                "nama_solusi" => "Periksa pengaturan bios di menu boot, apakah sudah sesuai untuk boot dari perangkat keras."
            ],
            [
                "kerusakan_id" => 7,
                "nama_solusi" => "Tutup paksa aplikasi. Jika program menjadi tidak responsif, anda dapat menekan (dan menahan) tombol Ctrl dan Alt dan Delete (Control, Alt, dan Delete) pada keyboard anda untuk membuka Task Manager anda kemudian dapat memilih aplikasi yang tidak responsif dan klik Akhiri Tugas untuk mematikan secara paksa."
            ],
            [
                "kerusakan_id" => 7,
                "nama_solusi" => "Instal ulang aplikasi yang salah."
            ],
            [
                "kerusakan_id" => 7,
                "nama_solusi" => "Matikan anti-virus yang dilindungi jika aplikasi berguna sebagai debug."
            ],
            [
                "kerusakan_id" => 8,
                "nama_solusi" => "Periksa apakah kabel sudah tersambung dengan benar dan pasang steker ke stopkontak."
            ],
            [
                "kerusakan_id" => 8,
                "nama_solusi" => "Cek juga tombol on/off di belakang persis di belakang Power Supply apakah pada posisi On."
            ],
            [
                "kerusakan_id" => 8,
                "nama_solusi" => "Jika sudah yakin terpasang dengan benar tapi tetap tidak ada respon, kemungkinan kabel / power supply sendiri rusak, ganti dengan kabel baru atau catu daya baru."
            ],
            [
                "kerusakan_id" => 9,
                "nama_solusi" => "Buka prosesor dari slotnya, bersihkan prosesor dengan tissue dan biarkan pasta tetap dingin."
            ],
            [
                "kerusakan_id" => 9,
                "nama_solusi" => "Cek slot pin pada motherboard apakah ada yang cacat, jika cacat harap dirapikan."
            ],
            [
                "kerusakan_id" => 9,
                "nama_solusi" => "Processor dan motherboard harus cocok, jika tidak cocok harus diganti."
            ],
            [
                "kerusakan_id" => 10,
                "nama_solusi" => "Cabut RAM lama."
            ],
            [
                "kerusakan_id" => 10,
                "nama_solusi" => "Ganti dengan RAM baru, pastikan kapasitasnya lebih besar dari yang lama."
            ],
            [
                "kerusakan_id" => 11,
                "nama_solusi" => "Cabut VGA lama."
            ],
            [
                "kerusakan_id" => 11,
                "nama_solusi" => "Ganti dengan VGA baru, pastikan kapasitas lebih besar dari yang lama."
            ],
            [
                "kerusakan_id" => 12,
                "nama_solusi" => "Cabut Clock Prosesor lama."
            ],
            [
                "kerusakan_id" => 12,
                "nama_solusi" => "Ganti dengan Clock prosesor baru, pastikan kapasitasnya lebih besar dari yang lama."
            ],
            [
                "kerusakan_id" => 13,
                "nama_solusi" => "Periksa persiapan dan pemasangan kabel."
            ],
            [
                "kerusakan_id" => 13,
                "nama_solusi" => "Lihat petunjuk pemasangan di motherboard."
            ],
            [
                "kerusakan_id" => 14,
                "nama_solusi" => "Disarankan agar mengganti switch baru."
            ],
            [
                "kerusakan_id" => 15,
                "nama_solusi" => "Periksa driver di device manager sudah terinstal, jika tidak akan ada tanda seru. Jika belum terinstal maka di instal terlebih dahulu."
            ],
            [
                "kerusakan_id" => 15,
                "nama_solusi" => "Saat sudah terinstal tapi tidak terdeteksi, cek kabel USB."
            ],
            [
                "kerusakan_id" => 16,
                "nama_solusi" => "Matikan komputer dan periksa apakah kabel keyboard sudah terpasang dengan benar ke CPU."
            ],
            [
                "kerusakan_id" => 16,
                "nama_solusi" => "Jika membutuhkan keyboard bisa dibersihkan menggunakan penyedot debu atau bersihkan dengan kuas."
            ],
            [
                "kerusakan_id" => 16,
                "nama_solusi" => "Pembersihan dilakukan saat komputer mati dan terpisah dari port keyboard."
            ],
            [
                "kerusakan_id" => 17,
                "nama_solusi" => "Solusi pertama pointer mouse tidak bergerak coba restore order task manager, caranya dari keyboard tekan ctrl+alt+delete bersamaan, kemudian jika muncul task manager windows, anda bisa mematikan program yang tidak merespon."
            ],
            [
                "kerusakan_id" => 17,
                "nama_solusi" => "Solusi kedua untuk mouse tidak berfungsi sama sekali, anda harus terlebih dahulu memeriksa koneksi fisik mouse. Dalam kasus terburuk, mouse anda mungkin telah rusak dan anda perlu membeli baru."
            ],
            [
                "kerusakan_id" => 17,
                "nama_solusi" => "Solusi ketiga coba lakukan klik ganda pada Contorl Panel > Hardware and Sound > Devices and printers > mouse. Dari sini anda klik dua kali kemudian set kecepatan data sesuai kemauan anda."
            ],
            [
                "kerusakan_id" => 18,
                "nama_solusi" => "Cek di sekitar motherboard apakah ada kapasitor yang bengkak, jika ada segera ganti jika tidak bisa diganti di tempat service."
            ],
            [
                "kerusakan_id" => 19,
                "nama_solusi" => "Lepaskan kabel dan pasang kembali. Pastikan kabel power terpasang dengan benar."
            ],
            [
                "kerusakan_id" => 19,
                "nama_solusi" => "Periksa apakah ada goresan pada kabel, jika ada maka balut kabel untuk menutupi goresan atau kabel yang putus."
            ],
            [
                "kerusakan_id" => 19,
                "nama_solusi" => "Sebaiknya ganti baru."
            ],
            [
                "kerusakan_id" => 20,
                "nama_solusi" => "Pastikan kabel terpasang dengan benar."
            ],
            [
                "kerusakan_id" => 20,
                "nama_solusi" => "Ganti kabel jika rusak."
            ],
            [
                "kerusakan_id" => 21,
                "nama_solusi" => "Coba ganti tray motor yang rusak dengan yang baru."
            ],
            [
                "kerusakan_id" => 21,
                "nama_solusi" => "Periksa juga apakah karet pengikat di dalam tray masih berfungsi dengan baik, jika tidak bisa ganti yang baru."
            ],
            [
                'kerusakan_id' => 21,
                'nama_solusi' => 'Coba ganti tray motor yang rusak dengan yang baru di CD/DVD Rom.'
            ],
            [
                'kerusakan_id' => 21,
                'nama_solusi' => 'Selanjutnya jika CD/DVD tidak dapat terbaca maka intervensi untuk membersihkan optical CD/DVD Rom, kemudian melakukan kalibrasi trimpot (sejenis potensiometer) yang ada di sekitar optik. Trimpot sedikit berputar searah jarum jam menggunakan perangkat apapun, baik itu dengan tang runcing maupun obeng mini. Pastikan dan lihat apakah trimpot pada CD/DVD Anda sudah benar-benar terpelintir.'
            ],
            [
                'kerusakan_id' => 21,
                'nama_solusi' => 'Cara lain adalah dengan memperbaiki bagian regulator CD/DVD Rom. Solusinya adalah dengan mengganti IC board total dan mengganti CD/DVD Rom yang baru.'
            ],
            [
                'kerusakan_id' => 22,
                'nama_solusi' => 'Matikan laptop, tunggu kurang lebih 5 menit, lalu hidupkan kembali.'
            ],
            [
                'kerusakan_id' => 22,
                'nama_solusi' => 'Saat booting, disarankan tekan (Del, Esc, F1, F2, F10, dll) untuk masuk ke menu BIOS Setup. Pilih pengaturan BIOS pada Default_settings dan ubah pengaturan waktu dan tanggal di BIOS.'
            ],
            [
                'kerusakan_id' => 22,
                'nama_solusi' => 'Tekan F10 atau Simpan & Keluar dari BIOS. Komputer akan restart, dan lihat apakah booting bisa berjalan normal.'
            ],
            [
                'kerusakan_id' => 22,
                'nama_solusi' => 'Jika pesan error masih muncul dan ternyata BIOS tidak bisa terus setting tanggal (langkah 3), ganti baterai CMOS dengan yang baru. Hidupkan pc dan lakukan langkah 2.'
            ],
            [
                'kerusakan_id' => 22,
                'nama_solusi' => 'Semoga disini bisa berjalan normal.'
            ],
        ];

        $model = new SolusiModel();
        $model->insertBatch($solusiData);
    }
}
