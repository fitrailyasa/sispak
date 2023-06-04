<?php

namespace App\Controllers;

use App\Models\NaiveBayesModel;

class NaiveBayesController extends BaseController
{
    public function classify()
    {
        // Memuat model dan data latihan
        $model = new NaiveBayesModel();
        $trainingData = $model->getTrainingData();

        // Preprocessing data (jika diperlukan)
        // ...

        // Melatih model Naive Bayes
        $trainedModel = $this->trainNaiveBayes($trainingData);

        // Contoh data baru yang akan diklasifikasikan
        $newData = [
            'token' => '...',
            'kode_kerusakan' => '...',
            'merk_laptop' => '...',
            'tipe_laptop' => '...'
        ];

        // Melakukan klasifikasi pada data baru
        $classificationResult = $this->classifyData($newData, $trainedModel);

        // Menampilkan hasil klasifikasi
        return view('classification_result', ['result' => $classificationResult]);
    }

    private function trainNaiveBayes($trainingData)
    {
        // Menghitung jumlah data latihan dan kelas
        $totalTrainingData = count($trainingData);
        $totalClasses = count(array_unique(array_column($trainingData, 'kode_kerusakan')));

        // Menghitung prior probability untuk setiap kelas
        $priorProbabilities = [];
        foreach ($trainingData as $data) {
            $class = $data['kode_kerusakan'];
            if (!isset($priorProbabilities[$class])) {
                $priorProbabilities[$class] = 1;
            } else {
                $priorProbabilities[$class]++;
            }
        }
        foreach ($priorProbabilities as $class => $count) {
            $priorProbabilities[$class] /= $totalTrainingData;
        }

        // Menghitung likelihood probability untuk setiap atribut dan kelas
        $likelihoodProbabilities = [];
        foreach ($trainingData as $data) {
            $class = $data['kode_kerusakan'];
            foreach ($data as $attribute => $value) {
                if ($attribute == 'kode_kerusakan') {
                    continue;
                }
                if (!isset($likelihoodProbabilities[$attribute][$value][$class])) {
                    $likelihoodProbabilities[$attribute][$value][$class] = 1;
                } else {
                    $likelihoodProbabilities[$attribute][$value][$class]++;
                }
            }
        }
        foreach ($likelihoodProbabilities as $attribute => &$attributeValues) {
            foreach ($attributeValues as &$valueProbabilities) {
                foreach ($valueProbabilities as $class => &$count) {
                    $count /= $priorProbabilities[$class];
                }
            }
        }

        // Mengembalikan model yang telah dilatih
        return [
            'priorProbabilities' => $priorProbabilities,
            'likelihoodProbabilities' => $likelihoodProbabilities,
            'totalClasses' => $totalClasses
        ];
    }

    private function classifyData($newData, $trainedModel)
    {
        $priorProbabilities = $trainedModel['priorProbabilities'];
        $likelihoodProbabilities = $trainedModel['likelihoodProbabilities'];
        $totalClasses = $trainedModel['totalClasses'];

        // Menghitung posterior probability untuk setiap kelas
        $posteriorProbabilities = [];
        foreach ($priorProbabilities as $class => $priorProbability) {
            $posteriorProbabilities[$class] = $priorProbability;
            foreach ($newData as $attribute => $value) {
                if ($attribute == 'token') {
                    continue;
                }
                if (isset($likelihoodProbabilities[$attribute][$value][$class])) {
                    $likelihood = $likelihoodProbabilities[$attribute][$value][$class];
                    $posteriorProbabilities[$class] *= $likelihood;
                }
            }
        }

        // Mengklasifikasikan data baru berdasarkan posterior probability tertinggi
        $classificationResult = '';
        $maxPosterior = 0;
        foreach ($posteriorProbabilities as $class => $posterior) {
            if ($posterior > $maxPosterior) {
                $maxPosterior = $posterior;
                $classificationResult = $class;
            }
        }

        // Mengembalikan hasil klasifikasi
        return $classificationResult;
    }
}
