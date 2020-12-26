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
            'name' => 'Paula',
            'email' => 'paula@email.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Paula 2',
            'email' => 'paula2@email.com',
            'password' => Hash::make('12345678')
        ]);
        //'password' => bcrypt('12345678')

       // factory(App\Models\User::class, 5)->create()->make();
    }
}
