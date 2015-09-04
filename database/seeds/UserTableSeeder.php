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
            'email' => 'jlopez@zegucom.com.mx',
            'role' => 'admin',
            'password' => bcrypt('admin')
        ]);
        factory(App\User::class, 49)->create();

    }
}
