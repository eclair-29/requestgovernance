<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            [
                'division_name' => 'INFORMATION SYSTEMS',
                'status_id' => '6',
            ],
        ]);
    }
}
