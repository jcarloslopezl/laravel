<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate users table
        DB::table('users')->truncate();

        factory(App\User::class)->create([
            'name' => 'Juan Carlos',
            'email' => 'admin@test.com',
            'role' => 'admin',
            'password' => 'test'
        ]);
        factory(App\User::class, 49)->create();

    }
}
