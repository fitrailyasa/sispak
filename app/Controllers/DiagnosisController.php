<?php

namespace App\Controllers;

use App\Models\GejalaModel;
use App\Models\KerusakanModel;
use App\Models\RuleModel;
use App\Models\SolusiModel;
use App\Models\RiwayatModel;
use App\Models\CFPenggunaModel;
use App\Models\CFPakarModel;

use CodeIgniter\Database\Query;

class DiagnosisController extends BaseController
{
    public function index()
    {
        // Gejala
        $gejalaModel = new GejalaModel();
        $gejalas = $gejalaModel->findAll();

        // CF Pengguna
        $cfPenggunaModel = new CFPenggunaModel();
        $cfPenggunas = $cfPenggunaModel->findAll();

        return view('diagnosis', ['gejalas' => $gejalas, 'cfPenggunas' => $cfPenggunas]);
    }

    public function hasil()
    {

        // Gejala
        $gejalaModel = new GejalaModel();
        $gejalas = $gejalaModel->find();
        
        // CF Pengguna
        $cfPenggunaModel = new CFPenggunaModel();
        $cfPenggunas = $cfPenggunaModel->find();

        // Kerusakan
        $kerusakanModel = new KerusakanModel();
        $kerusakans = $kerusakanModel->select('kode_kerusakan, nama_kerusakan')->where('kode_kerusakan', 'K2')->first();

        // Solusi
        $solusiModel = new SolusiModel();
        $solusis = $solusiModel->where('kode_kerusakan', $kerusakans['kode_kerusakan'])->findAll();

        // Rule
        $ruleModel = new RuleModel();
        $rules = $ruleModel->findAll();

        // Riwayat
        $riwayatModel = new RiwayatModel();
        $riwayats = $riwayatModel->findAll();

        // Proses Perhitungan Metode Naïve Bayes
        // 1) Menentukan nilai N, 𝑚, 𝑥, 𝑛𝑐 setiap class dan 𝑃(𝑣𝑗)

        $db = \Config\Database::connect();
        $total_gejala = $db->table('gejala')->countAll(); // Total Gejala
        $total_kerusakan = $db->table('kerusakan')->countAll(); // Total Kerusakan

        $N = 1; // jumlah record pada data di setiap kelas
        $m = $total_gejala; // Total Gejala
        $x = $total_kerusakan; // Total Kerusakan
        $nc = 2; // jumlah record pada data di setiap kelas

        $probabilitas = 1/$x; // contoh 1/22 = 0.045

        // 2) Menghitung nilai 𝑃(𝑎𝑖|𝑣𝑗)

        $prob_jenis_kerusakan = ($nc + $m * $probabilitas) / ($N + $m); // contoh (0 + 41 * 0.045)/(1 + 41) = 0.0439 (4 angka belakang koma)

        $prob_bulat = round($prob_jenis_kerusakan, 4); // Membulatkan prob menjadi 4 prob dibelakang koma
        $prob_format = number_format($prob_bulat, 4); // Format prob dengan 4 prob dibelakang koma

        // 3) Menghitung 𝑃(𝑎𝑖|𝑣𝑗) 𝑥 𝑃(𝑣𝑗) untuk tiap 𝑣.

        $prob_jenis_kerusakan = $prob_jenis_kerusakan * $prob_format; // contoh 0.0439 * 0.0439 * 0.0439 = 0.00000380720 (11 angka belakang koma)
        
        $cf_gejala = 0.6 + 0.75 * (1 - 0.6); // contoh bobot gejala 1 = 0.6, bobot gejala 2 = 0.75, dan bobot gejala 3 = 0.25
        
        $cf_gejala += $cf_gejala * (1 - $cf_gejala); // contoh 0.6 + 0.75 ∗ (1 − 0.6) = 0.6 + 0.75 ∗ 0.4 = 0.6 + 0.3 = 0.9

        $persentase = $cf_gejala * 100; // contoh 0.925 * 100 = 92.5%

        return view('hasil', ['gejalas' => $gejalas, 'kerusakans' => $kerusakans, 'rules' => $rules, 'solusis' => $solusis, 'riwayats' => $riwayats, 'cfPenggunas' => $cfPenggunas, 'persentase' => $persentase, 'total_gejala' => $total_gejala, 'total_kerusakan' => $total_kerusakan]);
    }
}