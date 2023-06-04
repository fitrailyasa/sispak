<?php

namespace App\Controllers;

use App\Models\GejalaModel;

class DiagnosisController extends BaseController
{
    public function index()
    {
        $gejalaModel = new GejalaModel();
        $gejalas = $gejalaModel->findAll();
        return view('diagnosis', ['gejalas' => $gejalas]);
    }

    public function hasil()
    {
        return view('hasil');
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

// 𝑃(nc17|$kode_kerusakan) = (0 + 41 * 0.045)/(1 + 41) = 0.0439
// 𝑃(nc35|$kode_kerusakan) = (0 + 41 * 0.045)/(1 + 41) = 0.0439
// 𝑃(nc07|$kode_kerusakan) = (0 + 41 * 0.045)/(1 + 41) = 0.0439

//// 3) Menghitung 𝑃(𝑎𝑖|𝑣𝑗) 𝑥 𝑃(𝑣𝑗) untuk tiap 𝑣.

// 𝑃(a𝑗|vj) = 𝑃(nc17|$kode_kerusakan) * 𝑃(nc35|$kode_kerusakan) * 𝑃(nc07|$kode_kerusakan)
// = 0.0439 * 0.0439 * 0.0439 = 0.00008720

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
