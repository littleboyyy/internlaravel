<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();
        /*
        DB::table('users')->insert([
                'id'=>1,
                'username' => 'admin',
                'type' => '1',
                'name' => 'admin',
                'email' => 'root@gmail.com',
                'password' => bcrypt('123@123'),
            ]);
            */
    

    }
}
