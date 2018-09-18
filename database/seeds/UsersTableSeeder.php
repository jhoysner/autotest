<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Admin',
           'email' => 'Admin@admin.com',
           'password' => bcrypt('123456'),
        ]);        


        factory(User::class, 20)->create();
    }
}
