<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class PegawaiSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama'          => 'Al Farizi',
        //         'alamat'        => 'Jl. Kenangan, No. 123',
        //         'created_at'    => Time::now('Asia/Jakarta', 'en_US'),
        //         'updated_at'    => Time::now('Asia/Jakarta', 'en_US')
        //     ],
        //     [
        //         'nama'          => 'Doddy Ferdiansyah',
        //         'alamat'        => 'Jl. ABC, No. 456',
        //         'created_at'    => Time::now('Asia/Jakarta', 'en_US'),
        //         'updated_at'    => Time::now('Asia/Jakarta', 'en_US')
        //     ],
        //     [
        //         'nama'          => 'Danur Kuning',
        //         'alamat'        => 'Jl. DEF, No. 789',
        //         'created_at'    => Time::now('Asia/Jakarta', 'en_US'),
        //         'updated_at'    => Time::now('Asia/Jakarta', 'en_US')
        //     ]
        // ];

        // $slug = url_title($this->request->getVar('judul'), '-', true);
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama'          => $faker->name,
                // 'slug'          => $faker->name,
                'alamat'        => $faker->address,
                'foto'          => 'placeholder.jpg',
                'created_at'    => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'    => Time::now('Asia/Jakarta', 'en_US')
            ];
            $this->db->table('pegawai')->insert($data);
        }
        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
        //     $data
        // );

        // Using Query Builder

        // $this->db->table('orang')->insertBatch($data);
    }
}
