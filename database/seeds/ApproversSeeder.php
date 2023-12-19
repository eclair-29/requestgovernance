<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ApproversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('approvers')->insert([
            [
                'user_id' => '1',
                'status_id' => '17',
            ],
        ]);
    }
}
