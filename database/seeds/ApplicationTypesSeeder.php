<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ApplicationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('application_types')->insert([
            [
                'application_code' => 'HRIS_APPLICATION',
                'application_name' => 'HRIS Application Form',
                'status_id' => '10',
            ],
            [
                'application_code' => 'USER_ACCOUNT_APPLICATION',
                'application_name' => 'User Account Application Form',
                'status_id' => '10',
            ],
            [
                'application_code' => 'JOB_ORDER_APPLICATION',
                'application_name' => 'Job Order Application Form',
                'status_id' => '10',
            ],
        ]);
    }
}
