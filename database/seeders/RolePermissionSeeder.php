<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Role;
use App\Models\Permission;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        for ($i = 0; $i<=10; $i++) {
            DB::table('roles_permissions')->insert([
                'permission_id' => Permission::select('id')->first()->id,
                'role_id' => Role::select('id')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
