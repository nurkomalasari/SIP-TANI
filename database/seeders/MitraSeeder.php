<?php

namespace Database\Seeders;

use App\Models\Mitra;
use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mitra::create([
            'nama' => 'Nurkom',
            'email' => 'nurkom@gmail.com',
            'password' => bcrypt('nurkom')
        ]);
    }
}
