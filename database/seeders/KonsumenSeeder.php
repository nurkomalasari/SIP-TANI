<?php

namespace Database\Seeders;

use App\Models\Konsumen;
use Illuminate\Database\Seeder;

class KonsumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Konsumen::create([
            'nama' => 'Arief',
            'email' => 'Arief@gmail.com',
            'password' => bcrypt('arief')
        ]);
    }
}
