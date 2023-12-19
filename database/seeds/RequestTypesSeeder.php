<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RequestTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('request_types')->insert([
            [
                'request_type_code' => 'HRIS_NEW',
                'request_type_name' => 'New',
                'application_type_id' => '1',
                'status_id' => '12'
            ],
            [
                'request_type_code' => 'HRIS_DELETE',
                'request_type_name' => 'Delete',
                'application_type_id' => '1',
                'status_id' => '12'
            ],
            [
                'request_type_code' => 'HRIS_UNBLOCKED_USER',
                'request_type_name' => 'Unblocked User',
                'application_type_id' => '1',
                'status_id' => '12'
            ],
        ]);
    }
}
