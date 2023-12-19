<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
                'status_code' => 'EMPLOYMENT_STATUS_ACTIVE',
                'description' => 'EMPLOYEE IS CURRENTLY WORKING ON SITE',
                'status_category_id' => '1'
            ],
            [
                'status_code' => 'EMPLOYMENT_STATUS_INACTIVE',
                'description' => 'EMPLOYEE IS NO LONGER WORKING ON SITE',
                'status_category_id' => '1'
            ],
            [
                'status_code' => 'EMPLOYMENT_STATUS_RETIRED',
                'description' => 'EMPLOYEE IS RETIRED',
                'status_category_id' => '1'
            ],
            [
                'status_code' => 'SITE_STATUS_ACTIVE',
                'description' => 'SITE IS ACTIVE',
                'status_category_id' => '2'
            ],
            [
                'status_code' => 'SITE_STATUS_INACTIVE',
                'description' => 'SITE IS INACTIVE',
                'status_category_id' => '2'
            ],
            [
                'status_code' => 'DIVISION_STATUS_ACTIVE',
                'description' => 'DIVISION IS ACTIVE',
                'status_category_id' => '3'
            ],
            [
                'status_code' => 'DIVISION_STATUS_INACTIVE',
                'description' => 'DIVISION IS INACTIVE',
                'status_category_id' => '3'
            ],
            [
                'status_code' => 'ROLE_STATUS_ACTIVE',
                'description' => 'ROLE IS ACTIVE',
                'status_category_id' => '4'
            ],
            [
                'status_code' => 'ROLE_STATUS_INACTIVE',
                'description' => 'ROLE IS INACTIVE',
                'status_category_id' => '4'
            ],
            [
                'status_code' => 'APPLICATION_TYPE_STATUS_ACTIVE',
                'description' => 'APPLICATION TYPE IS ACTIVE',
                'status_category_id' => '5'
            ],
            [
                'status_code' => 'APPLICATION_TYPE_STATUS_INACTIVE',
                'description' => 'APPLICATION TYPE IS INACTIVE',
                'status_category_id' => '5'
            ],
            [
                'status_code' => 'REQUEST_TYPE_STATUS_ACTIVE',
                'description' => 'REQUEST TYPE IS ACTIVE',
                'status_category_id' => '6'
            ],
            [
                'status_code' => 'REQUEST_TYPE_STATUS_INACTIVE',
                'description' => 'REQUEST TYPE IS INACTIVE',
                'status_category_id' => '6'
            ],
            [
                'status_code' => 'SERVICE_REQUEST_STATUS_PENDING',
                'description' => 'SERVICE REQUEST STATUS IS PENDING',
                'status_category_id' => '7'
            ],
            [
                'status_code' => 'SERVICE_REQUEST_STATUS_APPROVED',
                'description' => 'SERVICE REQUEST STATUS IS APPROVED',
                'status_category_id' => '7'
            ],
            [
                'status_code' => 'SERVICE_REQUEST_STATUS_REJECTED',
                'description' => 'SERVICE REQUEST STATUS IS REJECTED',
                'status_category_id' => '7'
            ],
            [
                'status_code' => 'APPROVER_STATUS_ACTIVE',
                'description' => 'APPROVER STATUS IS ACTIVE',
                'status_category_id' => '8'
            ],
            [
                'status_code' => 'APPROVER_STATUS_INACTIVE',
                'description' => 'APPROVER STATUS IS INACTIVE',
                'status_category_id' => '8'
            ],
        ]);
    }
}
