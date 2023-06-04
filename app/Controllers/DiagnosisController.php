<?php

namespace App\Controllers;

use App\Models\GejalaModel;
use App\Models\KerusakanModel;
use App\Models\RuleModel;
use App\Models\SolusiModel;
use App\Models\RiwayatModel;
use App\Models\CFPenggunaModel;
use App\Models\CFPakarModel;

class DiagnosisController extends BaseController
{
    public function index()
    {
        // Gejala
        $gejalaModel = new GejalaModel();
        $gejalas = $gejalaModel->findAll();
        return view('diagnosis', ['gejalas' => $gejalas]);
    }

    public function hasil()
    {

        // Gejala
        $gejalaModel = new GejalaModel();
        $gejalas = $gejalaModel->findAll();

        // Kerusakan
        $kerusakanModel = new KerusakanModel();
        $kerusakans = $kerusakanModel->findAll();

        // Rule
        $ruleModel = new RuleModel();
        $rules = $ruleModel->findAll();

        // Solusi
        $solusiModel = new SolusiModel();
        $solusis = $solusiModel->findAll();

        // Riwayat
        $riwayatModel = new RiwayatModel();
        $riwayats = $riwayatModel->findAll();

        // CF Pengguna
        $cfPenggunaModel = new CFPenggunaModel();
        $cfPenggunas = $cfPenggunaModel->findAll();

        // CF Pakar
        $cfPakarModel = new CFPakarModel();
        $cfPakars = $cfPakarModel->findAll();

        // Proses Perhitungan Metode Naïve Bayes
        // 1) Menentukan nilai N, 𝑚, 𝑥, 𝑛𝑐 setiap class dan 𝑃(𝑣𝑗)

        $total_gejala = $db->table('gejala')->countAll(); // Total Gejala
        $total_kerusakan = $db->table('kerusakan')->countAll(); // Total Kerusakan

        $N = 1; // jumlah record pada data di setiap kelas
        $m = 41; // Total Gejala
        $x = 22; // Total Kerusakan
        $nc = $kode_gejala; // jumlah record pada data di setiap kelas

        $probabilitas = 1/$x; // contoh 1/22 = 0.045

        // 2) Menghitung nilai 𝑃(𝑎𝑖|𝑣𝑗)

        $prob_jenis_kerusakan = ($nc + $m * $probabilitas) / ($N + $m); // contoh (0 + 41 * 0.045)/(1 + 41) = 0.0439 (4 angka belakang koma)

        $angka_bulat = round($prob_jenis_kerusakan, 4); // Membulatkan prob menjadi 4 prob dibelakang koma
        $prob_format = number_format($prob_bulat, 4); // Format prob dengan 4 prob dibelakang koma

        // 3) Menghitung 𝑃(𝑎𝑖|𝑣𝑗) 𝑥 𝑃(𝑣𝑗) untuk tiap 𝑣.

        $prob_jenis_kerusakan = $prob_jenis_kerusakan * $prob_format; // contoh 0.0439 * 0.0439 * 0.0439 = 0.00000380720 (11 angka belakang koma)
        
        $cf_gejala += $cf_gejala * (1 - $cf_gejala); // contoh 0.6 + 0.75 ∗ (1 − 0.6) = 0.6 + 0.75 ∗ 0.4 = 0.6 + 0.3 = 0.9

        $persentase = $cf_gejala * 100; // contoh 0.925 * 100 = 92.5%

        return view('diagnosis/hasil', ['gejalas' => $gejalas, 'kerusakans' => $kerusakans, 'rules' => $rules, 'solusis' => $solusis, 'riwayats' => $riwayats, 'cfPenggunas' => $cfPenggunas, 'cfPakars' => $cfPakars]);
    }
}

// b. Proses Perhitungan Metode Naïve Bayes
//// 1) Menentukan nilai N, 𝑚, 𝑥, 𝑛𝑐 setiap class dan 𝑃(𝑣𝑗)

// N = 1
// m = 41
// x = 22
// 𝑛𝑐 17 = 0 (jika K8 = 1)
// 𝑛𝑐 35 = 0 (jika K8 = 1)
// 𝑛𝑐 07 = 0 (jika K7/K3 = 1)
// P (𝑣𝑗) = 1/x = 0,045

//// 2) Menghitung nilai 𝑃(𝑎𝑖|𝑣𝑗)

// 𝑃(nc17|$kode_kerusakan) = (0 + 41 * 0.045)/(1 + 41) = 0.0439 (4 angka belakang koma)
// 𝑃(nc35|$kode_kerusakan) = (0 + 41 * 0.045)/(1 + 41) = 0.0439
// 𝑃(nc07|$kode_kerusakan) = (0 + 41 * 0.045)/(1 + 41) = 0.0439

//// 3) Menghitung 𝑃(𝑎𝑖|𝑣𝑗) 𝑥 𝑃(𝑣𝑗) untuk tiap 𝑣.

// 𝑃(a𝑗|vj) = 𝑃(nc17|$kode_kerusakan) * 𝑃(nc35|$kode_kerusakan) * 𝑃(nc07|$kode_kerusakan)
// = 0.0439 * 0.0439 * 0.0439 = 0.00000380720 (11 angka belakang koma)

// Contoh bobot gejala 1 = 0.6, bobot gejala 2 = 0.75, dan bobot gejala 3 = 0.25

// 𝐶𝐹[ℎ, 𝑠1&𝑠2] = 𝑀𝐵[ℎ, 𝑠1] + 𝑀𝐵[ℎ, 𝑠2](1 − 𝑀𝐵[ℎ, 𝑠1])
// 𝐶𝐹[ℎ, 𝑠1&𝑠2] = bobot_gejala1 * bobot_gejala2 * (1 - bobot_gejala1)
// 𝐶𝐹[ℎ, 𝑠1&𝑠2] = 0.6 + 0.75 ∗ (1 − 0.6)
// 𝐶𝐹[ℎ, 𝑠1&𝑠2] = 0.6 + 0.75 ∗ 0.4
// 𝐶𝐹[ℎ, 𝑠1&𝑠2] = 0.6 + 0.3
// 𝐶𝐹[ℎ, 𝑠1&𝑠2] = 0.9

// 𝐶𝐹[ℎ, 𝑠1&𝑠2&𝑠3] = 𝑀𝐵[ℎ, 𝑠1&𝑠2] + 𝑀𝐵[ℎ, 𝑠3](1 −𝑀𝐵[ℎ, 𝑠1&𝑠2])
// 𝐶𝐹[ℎ, 𝑠1&𝑠2&𝑠3] = 0.9 + 0.25 ∗ (1 − 0.9)
// 𝐶𝐹[ℎ, 𝑠1&𝑠2&𝑠3] = 0.9 + 0.25 ∗ 0.1
// 𝐶𝐹[ℎ, 𝑠1&𝑠2&𝑠3] = 0.9 + 0.025
// 𝐶𝐹[ℎ, 𝑠1&𝑠2&𝑠3] = 0.925

// Persentase = 0.925 * 100 = 92.5%


// 