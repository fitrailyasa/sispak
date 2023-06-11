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
        
        // CF Pengguna
        $cfPenggunaModel = new CFPenggunaModel();

        // Kerusakan
        $kerusakanModel = new KerusakanModel();

        // Rule
        $ruleModel = new RuleModel();

        $jumlahInput = $gejalaModel->countAll(); // Total gejala
        
        $cfPenggunas = []; // Inisialisasi array untuk menyimpan data CF pengguna

        for ($i = 1; $i <= $jumlahInput; $i++) {
            // Menggunakan nomor iterasi sebagai bagian dari nama field input untuk membedakan inputan
            $kodeGejala = $this->request->getPost('kode_gejala_' . $i);
            $bobotPengguna = $this->request->getPost('bobot_pengguna_' . $i);

            // Menambahkan data CF pengguna ke dalam array
            $cfPenggunas[] = [
                'kode_gejala' => $kodeGejala,
                'bobot_pengguna' => $bobotPengguna,
            ];
        }

        
        // Proses Perhitungan Metode Naïve Bayes
        // 1) Menentukan nilai N, 𝑚, 𝑥, 𝑛𝑐 setiap class dan 𝑃(𝑣𝑗)
        
        $N = 1; 
        $m = $gejalaModel->countAll(); // Total gejala
        $x = $kerusakanModel->countAll(); // Total kerusakan
        $nc = $cfPenggunas; // Total gejala yang dipilih
        
        $probabilitas = 1/$x;
        $prob_bulat = round($probabilitas, 3);
        
        // 2) Menghitung nilai 𝑃(𝑎𝑖|𝑣𝑗)
        
        $prob_jenis_kerusakan = []; // Inisialisasi variabel sebagai array kosong

        foreach ($cfPenggunas as $cf_pengguna) {
            $kodeGejala = $cf_pengguna['kode_gejala'];
            $bobotPengguna = $cf_pengguna['bobot_pengguna'];
        
            $prob_jenis_kerusakan[] = ($cf_pengguna['bobot_pengguna'] + $m * $probabilitas) / ($N + $m);
        }
        
        $prob_jenis_bulat = round(array_product($prob_jenis_kerusakan), 4); // Menghitung hasil perkalian probabilitas dengan fungsi array_product()
        
        // 3) Menghitung 𝑃(𝑎𝑖|𝑣𝑗) 𝑥 𝑃(𝑣𝑗) untuk tiap 𝑣.
        
        $cf_gejala = 0.6 + 0.75 * (1 - 0.6); // contoh bobot gejala 1 = 0.6, bobot gejala 2 = 0.75, dan bobot gejala 3 = 0.25        
        $cf_gejala += $cf_gejala * (1 - $cf_gejala); // contoh 0.6 + 0.75 ∗ (1 − 0.6) = 0.6 + 0.75 ∗ 0.4 = 0.6 + 0.3 = 0.9
        $persentase = $cf_gejala * 100; // contoh 0.925 * 100 = 92.5%

        $rules = [];
        foreach ($cfPenggunas as $cf_pengguna) {
            $kodeGejala = $cf_pengguna['kode_gejala'];
            $rule = $ruleModel->where('kode_gejala', $kodeGejala)->findAll();
            $rules = array_merge($rules, $rule);
        }

        
        $kerusakans = [];
        foreach ($rules as $rule) {
            $kerusakan = $kerusakanModel->find($rule['kode_kerusakan']);
            if ($kerusakan) {
                $kerusakans[] = $kerusakan;
            }
        }
        
        // Solusi
        $solusiModel = new SolusiModel();
        $solusis = [];
        foreach ($kerusakans as $kerusakan) {
            $solusi = $solusiModel->where('kode_kerusakan', $kerusakan['kode_kerusakan'])->findAll();
            if ($solusi) {
                $solusis[] = $solusi;
            }
        }

        var_dump($persentase);
        var_dump($kerusakans);
        exit();

        // // Riwayat
        // $validationRules = [
            //     'kode_kerusakan' => 'required',
            //     'merk_laptop' => 'required',
            //     'tipe_laptop' => 'required'
            // ];
            
            // $validationMessages = [
                //     'kode_kerusakan' => [
                    //         'required' => 'kode kerusakan harus diisi.',
                    //     ],
                    //     'merk_laptop' => [
                        //         'required' => 'merk laptop harus diisi.',
                        //     ],
                        //     'tipe_laptop' => [
                            //         'required' => 'tipe laptop harus diisi.',
                            //     ]
                            // ];
                            
                            // if (!$this->validate($validationRules, $validationMessages)) {
                                //     return redirect()->back()->withInput()->with('validation', $this->validator);
                                // }
                                
        // $data = [
        //     'token' => $this->request->getPost('kode_kerusakan') . date('YmdHis'),
        //     'kode_kerusakan' => $this->request->getPost('kode_kerusakan'),
        //     'merk_laptop' => $this->request->getPost('merk_laptop'),
        //     'tipe_laptop' => $this->request->getPost('tipe_laptop'),
        //     'created_at' => date('Y-m-d H:i:s')
        // ];
        
        // $riwayatModel = new RiwayatModel();
        // $riwayatModel->insert($data);
        
        $merk_laptop = $this->request->getPost('merk_laptop');
        $tipe_laptop = $this->request->getPost('tipe_laptop');
        

        return view('hasil', ['gejalas' => $gejalas, 'kerusakans' => $kerusakans, 'rules' => $rules, 'solusis' => $solusis, 'persentase' => $persentase, 'merk_laptop' => $merk_laptop, 'tipe_laptop' => $tipe_laptop]);
    }
}