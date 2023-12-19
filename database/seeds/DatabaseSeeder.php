<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StatusCategoriesSeeder::class,
            StatusesSeeder::class,
            SitesSeeder::class,
            DivisionsSeeder::class,
            RolesSeeder::class,
            UsersSeeder::class,
            RoleUserSeeder::class,
            ApplicationTypesSeeder::class,
            ApproversSeeder::class,
            RequestTypesSeeder::class,
            ServiceRequestsSeeder::class
        ]);
    }
}
