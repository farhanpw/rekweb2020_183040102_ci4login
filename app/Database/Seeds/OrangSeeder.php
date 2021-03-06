<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama'       => 'farhan pratama',
        //         'alamat'     => 'Jl. ABC No. 123',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama'       => 'Albert Ganteng',
        //         'alamat'     => 'Jl. CBA No. 321',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama'       => 'Tesla tampan',
        //         'alamat'     => 'Jl. Cineam No. 123',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ]
        // ];

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama'       => $faker->name,
                'alamat'     => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];

            $this->db->table('orang')->insert($data);
        }
        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
        //     $data
        // );

        // Using Query Builder
        // $this->db->table('orang')->insert($data);
        // $this->db->table('orang')->insertBatch($data);
    }
}
