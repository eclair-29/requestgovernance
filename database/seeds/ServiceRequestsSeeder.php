<?php

use Illuminate\Database\Seeder;

class ServiceRequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_requests')->insert([
            [
                'ticket_id' => 'HR2300001',
                'application_type_id' => '1',
                'user_id' => '1',
                'approver_id' => '1',
                'status_id' => '14',
                'request_type_id' => '1'
            ],
        ]);
    }
}
