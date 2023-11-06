<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TalleresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('talleres')->insert([
            ['nombreTaller' => 'Atención médica'],
            ['nombreTaller' => 'Fisioterapia'],
            ['nombreTaller' => 'Psicología'],
        ]);
    }
}
