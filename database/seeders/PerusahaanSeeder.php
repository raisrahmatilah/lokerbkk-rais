<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perusahaan;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataPerusahaan = [
            [
                'nama_perusahaan' => 'PT.Nabati',
                'alamat' => 'bandung',
                'kontak' => '082322332',
            ],
            [
                'nama_perusahaan' => 'PT.Le Mineral',
                'alamat' => 'karawang',
                'kontak' => '0812345678',
                
            ]
            ];
            foreach ($dataPerusahaan as $key => $val) {
                Perusahaan::create($val);
            }
    }
}
