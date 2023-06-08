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
        // Rule
        $ruleModel = new RuleModel();
        $rules = $ruleModel->findAll();

        // Gejala
        $gejalaModel = new GejalaModel();
        $gejala = $gejalaModel->find('G2');

        // CF Pengguna
        $cfPenggunaModel = new CFPenggunaModel();
        $cfPenggunas = $cfPenggunaModel->where('bobot_pengguna', $gejala['kode_gejala'])->findAll();

        // Kerusakan
        $kerusakanModel = new KerusakanModel();
        $kerusakans = $kerusakanModel->select('kode_kerusakan, nama_kerusakan')->where('kode_kerusakan', 'K2')->first();

        // Solusi
        $solusiModel = new SolusiModel();
        $solusis = $solusiModel->where('kode_kerusakan', $kerusakans['kode_kerusakan'])->findAll();

        // Proses Perhitungan Metode Naïve Bayes
        // 1) Menentukan nilai N, 𝑚, 𝑥, 𝑛𝑐 setiap class dan 𝑃(𝑣𝑗)

        $N = 1; 
        $m = $gejalaModel->countAll(); // Total gejala
        $x = $kerusakanModel->countAll(); // Total kerusakan
        $nc = count($cfPenggunas); // Total gejala yang dipilih

        $probabilitas = 1/$x;
        $prob_bulat = round($probabilitas, 3);

        // 2) Menghitung nilai 𝑃(𝑎𝑖|𝑣𝑗)

        $prob_jenis_kerusakan = ($nc + $m * $probabilitas) / ($N + $m); // contoh (0 + 41 * 0.045)/(1 + 41) = 0.0439 (4 angka belakang koma)

        $prob_jenis_bulat = round($prob_jenis_kerusakan, 4); // Membulatkan prob menjadi 4 prob dibelakang koma

        // 3) Menghitung 𝑃(𝑎𝑖|𝑣𝑗) 𝑥 𝑃(𝑣𝑗) untuk tiap 𝑣.

        $prob_jenis_kerusakan = $prob_jenis_kerusakan * $prob_jenis_bulat; // contoh 0.0439 * 0.0439 * 0.0439 = 0.00000380720 (11 angka belakang koma)
        
        $cf_gejala = 0.6 + 0.75 * (1 - 0.6); // contoh bobot gejala 1 = 0.6, bobot gejala 2 = 0.75, dan bobot gejala 3 = 0.25
        
        $cf_gejala += $cf_gejala * (1 - $cf_gejala); // contoh 0.6 + 0.75 ∗ (1 − 0.6) = 0.6 + 0.75 ∗ 0.4 = 0.6 + 0.3 = 0.9

        $persentase = $cf_gejala * 100; // contoh 0.925 * 100 = 92.5%

        return view('hasil', ['gejalas' => $gejalas, 'kerusakans' => $kerusakans, 'rules' => $rules, 'solusis' => $solusis, 'cfPenggunas' => $cfPenggunas, 'persentase' => $persentase]);
    }
}