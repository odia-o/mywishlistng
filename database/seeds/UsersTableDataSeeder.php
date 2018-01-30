<?php

use Illuminate\Database\Seeder;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) {
            DB::table('users')->insert([
                'name' => str_random(8),
                'email' => str_random(12).'@mail.com',
                'is_permission' => rand(0,2),
                'password' => bcrypt('123456')
            ]);
        }
    }
}
