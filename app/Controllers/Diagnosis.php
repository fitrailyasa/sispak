<?php

namespace App\Controllers;

class Diagnosis extends BaseController
{
    public function index()
    {
        return view('diagnosis');
    }

    public function hasil()
    {
        $data = [
            'berwarna' => $this->request->getPost('berwarna'),
            'berbiji' => $this->request->getPost('berbiji'),
            'rasa' => $this->request->getPost('rasa')
        ];

        if ($data['berwarna'] == 'merah' && $data['berbiji'] == 'ada' && $data['rasa'] == 'manis') {
            $jenis_buah = 'apel';
        } elseif ($data['berwarna'] == 'hijau' && $data['berbiji'] == 'tidak ada' && $data['rasa'] == 'asam') {
            $jenis_buah = 'jeruk';
        } else {
            $jenis_buah = 'tidak diketahui';
        }

        $data['jenis_buah'] = $jenis_buah;

        return view('diagnosis/hasil', $data);
    }
}
