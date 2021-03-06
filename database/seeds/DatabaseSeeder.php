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
        // $this->call(UsersTableSeeder::class);

        DB::table('admins')->insert([
            'name' => 'Administrador',
            'email' => 'admin@adm.com',
            'password' => Hash::make('admin123@')       
        ]);

        DB::table('users')->insert([
            'name' => 'Washington',
            'email' => 'washington@dev.com',
            'password' => Hash::make('dev1234@')
        ]);
    }
}
