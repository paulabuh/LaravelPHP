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
        $this->call(UsersTableSeeder::class); 
        $this->call(SalasTableSeeder::class);
        $this->call(AlunosTableSeeder::class);
        $this->call(ProfessoresTableSeeder::class);
        $this->call(MateriasTableSeeder::class);
        $this->call(CursosTableSeeder::class);

    }
}
