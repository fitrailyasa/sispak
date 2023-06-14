<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RuleSeeder extends Seeder
{
    public function run()
    {
        $rule = [
            [
                'kode_rule' => 'R1',
                'kode_gejala' => 'G01',
                'kode_kerusakan' => 'K01',
                'bobot_pakar' => 0.5
            ],
            [
                'kode_rule' => 'R1',
                'kode_gejala' => 'G02',
                'kode_kerusakan' => 'K01',
                'bobot_pakar' => 0.9
            ],
            [
                'kode_rule' => 'R1',
                'kode_gejala' => 'G26',
                'kode_kerusakan' => 'K01',
                'bobot_pakar' => 0.4
            ],
            [
                'kode_rule' => 'R2',
                'kode_gejala' => 'G03',
                'kode_kerusakan' => 'K02',
                'bobot_pakar' => 0.9
            ],
            [
                'kode_rule' => 'R2',
                'kode_gejala' => 'G04',
                'kode_kerusakan' => 'K02',
                'bobot_pakar' => 0.4
            ],
            [
                'kode_rule' => 'R2',
                'kode_gejala' => 'G05',
                'kode_kerusakan' => 'K02',
                'bobot_pakar' => 0.6
            ],
            [
                'kode_rule' => 'R2',
                'kode_gejala' => 'G11',
                'kode_kerusakan' => 'K02',
                'bobot_pakar' => 0.6
            ],
            [
                'kode_rule' => 'R2',
                'kode_gejala' => 'G12',
                'kode_kerusakan' => 'K02',
                'bobot_pakar' => 0.9
            ],
            [
                'kode_rule' => 'R2',
                'kode_gejala' => 'G33',
                'kode_kerusakan' => 'K02',
                'bobot_pakar' => 0.8
            ],
            [
                'kode_rule' => 'R3',
                'kode_gejala' => 'G06',
                'kode_kerusakan' => 'K03',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R3',
                'kode_gejala' => 'G07',
                'kode_kerusakan' => 'K03',
                'bobot_pakar' => 0.7
            ],
            [
                'kode_rule' => 'R3',
                'kode_gejala' => 'G08',
                'kode_kerusakan' => 'K03',
                'bobot_pakar' => 0.7
            ],
            [
                'kode_rule' => 'R3',
                'kode_gejala' => 'G10',
                'kode_kerusakan' => 'K03',
                'bobot_pakar' => 0.8
            ],
            [
                'kode_rule' => 'R3',
                'kode_gejala' => 'G21',
                'kode_kerusakan' => 'K03',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R3',
                'kode_gejala' => 'G22',
                'kode_kerusakan' => 'K03',
                'bobot_pakar' => 0.4
            ],
            [
                'kode_rule' => 'R3',
                'kode_gejala' => 'G34',
                'kode_kerusakan' => 'K03',
                'bobot_pakar' => 0.4
            ],
            [
                'kode_rule' => 'R4',
                'kode_gejala' => 'G03',
                'kode_kerusakan' => 'K04',
                'bobot_pakar' => 0.4
            ],
            [
                'kode_rule' => 'R4',
                'kode_gejala' => 'G09',
                'kode_kerusakan' => 'K04',
                'bobot_pakar' => 0.5
            ],
            [
                'kode_rule' => 'R4',
                'kode_gejala' => 'G12',
                'kode_kerusakan' => 'K04',
                'bobot_pakar' => 0.4
            ],
            [
                'kode_rule' => 'R5',
                'kode_gejala' => 'G10',
                'kode_kerusakan' => 'K05',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R5',
                'kode_gejala' => 'G13',
                'kode_kerusakan' => 'K05',
                'bobot_pakar' => 0.5
            ],
            [
                'kode_rule' => 'R5',
                'kode_gejala' => 'G14',
                'kode_kerusakan' => 'K05',
                'bobot_pakar' => 0.6
            ],
            [
                'kode_rule' => 'R6',
                'kode_gejala' => 'G11',
                'kode_kerusakan' => 'K06',
                'bobot_pakar' => 0.9
            ],
            [
                'kode_rule' => 'R6',
                'kode_gejala' => 'G15',
                'kode_kerusakan' => 'K06',
                'bobot_pakar' => 0.9
            ],
            [
                'kode_rule' => 'R6',
                'kode_gejala' => 'G40',
                'kode_kerusakan' => 'K06',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R7',
                'kode_gejala' => 'G07',
                'kode_kerusakan' => 'K07',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R7',
                'kode_gejala' => 'G12',
                'kode_kerusakan' => 'K07',
                'bobot_pakar' => 0.4
            ],
            // [
            //     'kode_rule' => 'R8',
            //     'kode_gejala' => 'G16',
            //     'kode_kerusakan' => 'K08',
            //     'bobot_pakar' => 0.9
            // ],
            // [
            //     'kode_rule' => 'R8',
            //     'kode_gejala' => 'G17',
            //     'kode_kerusakan' => 'K08',
            //     'bobot_pakar' => 0.6
            // ],
            // [
            //     'kode_rule' => 'R8',
            //     'kode_gejala' => 'G35',
            //     'kode_kerusakan' => 'K08',
            //     'bobot_pakar' => 0.9
            // ],
            [
                'kode_rule' => 'R9',
                'kode_gejala' => 'G01',
                'kode_kerusakan' => 'K09',
                'bobot_pakar' => 0.8
            ],
            [
                'kode_rule' => 'R9',
                'kode_gejala' => 'G03',
                'kode_kerusakan' => 'K09',
                'bobot_pakar' => 0.9
            ],
            [
                'kode_rule' => 'R9',
                'kode_gejala' => 'G04',
                'kode_kerusakan' => 'K09',
                'bobot_pakar' => 0.6
            ],
            [
                'kode_rule' => 'R9',
                'kode_gejala' => 'G05',
                'kode_kerusakan' => 'K09',
                'bobot_pakar' => 0.4
            ],
            [
                'kode_rule' => 'R10',
                'kode_gejala' => 'G18',
                'kode_kerusakan' => 'K10',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R10',
                'kode_gejala' => 'G19',
                'kode_kerusakan' => 'K10',
                'bobot_pakar' => 0.6
            ],
            [
                'kode_rule' => 'R11',
                'kode_gejala' => 'G09',
                'kode_kerusakan' => 'K11',
                'bobot_pakar' => 0.9
            ],
            [
                'kode_rule' => 'R11',
                'kode_gejala' => 'G20',
                'kode_kerusakan' => 'K11',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R12',
                'kode_gejala' => 'G19',
                'kode_kerusakan' => 'K12',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R13',
                'kode_gejala' => 'G41',
                'kode_kerusakan' => 'K13',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R14',
                'kode_gejala' => 'G05',
                'kode_kerusakan' => 'K14',
                'bobot_pakar' => 0.2
            ],
            [
                'kode_rule' => 'R14',
                'kode_gejala' => 'G23',
                'kode_kerusakan' => 'K14',
                'bobot_pakar' => 0.6
            ],
            [
                'kode_rule' => 'R15',
                'kode_gejala' => 'G10',
                'kode_kerusakan' => 'K15',
                'bobot_pakar' => 0.7
            ],
            [
                'kode_rule' => 'R16',
                'kode_gejala' => 'G10',
                'kode_kerusakan' => 'K16',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R16',
                'kode_gejala' => 'G24',
                'kode_kerusakan' => 'K16',
                'bobot_pakar' => 0.9
            ],
            [
                'kode_rule' => 'R16',
                'kode_gejala' => 'G27',
                'kode_kerusakan' => 'K16',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R17',
                'kode_gejala' => 'G10',
                'kode_kerusakan' => 'K17',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R17',
                'kode_gejala' => 'G25',
                'kode_kerusakan' => 'K17',
                'bobot_pakar' => 0.7
            ],
            [
                'kode_rule' => 'R18',
                'kode_gejala' => 'G28',
                'kode_kerusakan' => 'K18',
                'bobot_pakar' => 0.7
            ],
            [
                'kode_rule' => 'R18',
                'kode_gejala' => 'G31',
                'kode_kerusakan' => 'K18',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R18',
                'kode_gejala' => 'G36',
                'kode_kerusakan' => 'K18',
                'bobot_pakar' => 0.6
            ],
            [
                'kode_rule' => 'R19',
                'kode_gejala' => 'G29',
                'kode_kerusakan' => 'K19',
                'bobot_pakar' => 0.6
            ],
            [
                'kode_rule' => 'R19',
                'kode_gejala' => 'G30',
                'kode_kerusakan' => 'K19',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R19',
                'kode_gejala' => 'G32',
                'kode_kerusakan' => 'K19',
                'bobot_pakar' => 0.4
            ],
            [
                'kode_rule' => 'R20',
                'kode_gejala' => 'G10',
                'kode_kerusakan' => 'K20',
                'bobot_pakar' => 0.8
            ],
            [
                'kode_rule' => 'R20',
                'kode_gejala' => 'G21',
                'kode_kerusakan' => 'K20',
                'bobot_pakar' => 0.9
            ],
            [
                'kode_rule' => 'R21',
                'kode_gejala' => 'G37',
                'kode_kerusakan' => 'K21',
                'bobot_pakar' => 0.5
            ],
            [
                'kode_rule' => 'R21',
                'kode_gejala' => 'G38',
                'kode_kerusakan' => 'K21',
                'bobot_pakar' => 1.0
            ],
            [
                'kode_rule' => 'R22',
                'kode_gejala' => 'G39',
                'kode_kerusakan' => 'K22',
                'bobot_pakar' => 0.8
            ],
            [
                'kode_rule' => 'R22',
                'kode_gejala' => 'G03',
                'kode_kerusakan' => 'K22',
                'bobot_pakar' => 1.0
            ],
        ];
        $this->db->table('rule')->insertBatch($rule);
    }
}
