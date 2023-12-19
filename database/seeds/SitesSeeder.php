<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            [
                'site_code' => 'NCFL',
                'site_name' => 'Nidec Philippines Corporation',
                'status_id' => '4'
            ],
        ]);
    }
}
