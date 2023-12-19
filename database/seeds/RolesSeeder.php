<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'role_code' => 'ADMIN',
                'description' => 'REQUEST GOVERNANCE - ADMIN ACCESS',
                'status_id' => '8'
            ],
            [
                'role_code' => 'APPROVER',
                'description' => 'REQUEST GOVERNANCE - APPROVER ACCESS',
                'status_id' => '8'
            ],
            [
                'role_code' => 'REQUESTOR',
                'description' => 'REQUEST GOVERNANCE - REQUESTOR ACCESS',
                'status_id' => '8'
            ],
        ]);
    }
}
