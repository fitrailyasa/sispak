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
        $gejalas = []; // Inisialisasi array untuk menyimpan data gejala

        for ($i = 1; $i <= $jumlahInput; $i++) {
            // Menggunakan nomor iterasi sebagai bagian dari nama field input untuk membedakan inputan
            $kodeGejala = $this->request->getPost('kode_gejala_' . $i);
            $bobotPengguna = $this->request->getPost('bobot_pengguna_' . $i);
            if ($bobotPengguna > 0) {
                $gejala = $gejalaModel->find($kodeGejala); // Mengambil data gejala berdasarkan kode gejala

                // Menambahkan data CF pengguna ke dalam array
                $cfPenggunas[] = [
                    'kode_gejala' => $kodeGejala,
                    'bobot_pengguna' => $bobotPengguna,
                ];
                $gejalas[] = $gejala; // Menyimpan data gejala dalam array
            }
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
        
        $i = 0;
        $satu = $i + 1;
        
        foreach ($cfPenggunas as $cf_pengguna) {
            $kodeGejala = $cf_pengguna['kode_gejala'];
            $bobotPengguna = $cf_pengguna['bobot_pengguna'];
            $bobotPakar = $ruleModel->where('kode_gejala', $kodeGejala)->first()['bobot_pakar'];
            
            $prob_jenis_kerusakan[] = ($cf_pengguna['bobot_pengguna'] + $m * $probabilitas) / ($N + $m);
            
            $cf_gejala[] = $bobotPengguna * $bobotPakar;
            
            // 3) Menghitung 𝑃(𝑎𝑖|𝑣𝑗) 𝑥 𝑃(𝑣𝑗) untuk tiap 𝑣.
            
            $cf_combine = $cf_gejala[$i] + $cf_gejala[$i] * (1 - $cf_gejala[$i]);
            $persentase[] = $cf_combine * 100; // contoh 0.925 * 100 = 92.5%
            $i++;
        }
        
        $maxValue = max($persentase);
        $maxValueIndex = array_keys($persentase, max($persentase)); // Indeks dengan persentase terbesar
        $maxValueIndex = $maxValueIndex[0]; 
        
        $rules = [];
        if (isset($cfPenggunas[$maxValueIndex])) {
            $kodeGejala = $cfPenggunas[$maxValueIndex]['kode_gejala'];
            $rule = $ruleModel->where('kode_gejala', $kodeGejala)->findAll();
            $rules = array_merge($rules, $rule);
        }
        
        // Solusi
        $solusiModel = new SolusiModel();
        $solusis = [];
        foreach ($rules as $rule) {
            $solusi = $solusiModel->where('kode_kerusakan', $rule['kode_kerusakan'])->findAll();
            if ($solusi) {
                $solusis[] = $solusi;
            }
        }
        
        
        // Riwayat
        $validationRules = [
            'merk_laptop' => 'required',
            'tipe_laptop' => 'required'
        ];
        
        $validationMessages = [
            'merk_laptop' => [
                'required' => 'merk laptop harus diisi.',
            ],
            'tipe_laptop' => [
                'required' => 'tipe laptop harus diisi.',
                ]
            ];
            
            if (!$this->validate($validationRules, $validationMessages)) {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }
            
            $data = [
                'token' => $rule['kode_kerusakan'] . date('YmdHis'),
                'kode_kerusakan' => $rule['kode_kerusakan'],
                'merk_laptop' => $this->request->getPost('merk_laptop'),
                'tipe_laptop' => $this->request->getPost('tipe_laptop'),
                'created_at' => date('Y-m-d H:i:s')
            ];
            
        $riwayatModel = new RiwayatModel();
        $riwayatModel->insert($data);
        
        $merk_laptop = $this->request->getPost('merk_laptop');
        $tipe_laptop = $this->request->getPost('tipe_laptop');

        return view('hasil', ['gejalas' => $gejalas, 'rules' => $rules, 'solusis' => $solusis, 'merk_laptop' => $merk_laptop, 'tipe_laptop' => $tipe_laptop, 'maxValue' => $maxValue]);
    }
}