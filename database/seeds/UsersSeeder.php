<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'employee_id' => 'B302300082',
                'employee_fname' => 'Miguel',
                'employee_lname' => 'De Chavez',
                'employee_name' => 'Miguel De Chavez',
                'password' => Hash::make('12345'),
                'status_id' => '1',
                'division_id' => '1',
                'site_id' => '1'
            ]
        ]);
    }
}
