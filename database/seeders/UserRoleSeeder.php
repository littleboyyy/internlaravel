<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use DB;
class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<=10; $i++) {
            DB::table('users_roles') -> insert([
                'user_id' => User::select('id')->first()->id,
                'role_id' => Role::select('id')->first()->id,
                'created_at' => now(),
                'updated_at'=> now(),
            ]);
        }
        
    }
}
