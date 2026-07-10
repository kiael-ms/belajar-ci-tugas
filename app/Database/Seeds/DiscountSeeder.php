<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiscountSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'tanggal' => '2026-07-10',
                'nominal' => 100000,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'tanggal' => '2026-07-11',
                'nominal' => 125000,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'tanggal' => '2026-07-12',
                'nominal' => 150000,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'tanggal' => '2026-07-13',
                'nominal' => 175000,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'tanggal' => '2026-07-14',
                'nominal' => 200000,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'tanggal' => '2026-07-15',
                'nominal' => 225000,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'tanggal' => '2026-07-16',
                'nominal' => 250000,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'tanggal' => '2026-07-17',
                'nominal' => 275000,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'tanggal' => '2026-07-18',
                'nominal' => 300000,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'tanggal' => '2026-07-19',
                'nominal' => 350000,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => null,
                'deleted_at' => null,
            ],
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('discount')->insert($item);
        }
    }
}