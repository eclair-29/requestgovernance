<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_categories')->insert([
            [
                'category_code' => 'EMPLOYMENT_STATUS',
                'description' => 'STATUS CATEGORY FOR USER EMPLOYMENT',
            ],
            [
                'category_code' => 'SITE_STATUS',
                'description' => 'STATUS CATEGORY FOR SITE',
            ],
            [
                'category_code' => 'DIVISION_STATUS',
                'description' => 'STATUS CATEGORY FOR COMPANY DIVISION',
            ],
            [
                'category_code' => 'ROLE_STATUS',
                'description' => 'STATUS CATEGORY FOR ROLES',
            ],
            [
                'category_code' => 'APPLICATION_TYPE_STATUS',
                'description' => 'STATUS CATEGORY FOR APPLICATION FORM TYPES',
            ],
            [
                'category_code' => 'REQUEST_TYPE_STATUS',
                'description' => 'STATUS CATEGORY FOR APPLICATION FORM REQUEST TYPES',
            ],
            [
                'category_code' => 'SERVICE_REQUEST_STATUS',
                'description' => 'STATUS CATEGORY FOR SERVICE_REQUEST_STATUS',
            ],
            [
                'category_code' => 'APPROVER_STATUS',
                'description' => 'STATUS CATEGORY FOR APPROVER',
            ],
        ]);
    }
}
