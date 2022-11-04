<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            SchoolSeeder::class,
            UserSeeder::class,
            PermissionGroupSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,
            TagSeeder::class,
            TaggableSeeder::class,
            RolePermissionSeeder::class,
            AttachmentSeeder::class,
            MessageSeeder::class,
        ]);
    }
}
