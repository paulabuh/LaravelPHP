<?php

use Illuminate\Database\Seeder;
use App\Models\Professor;

class ProfessoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Professor::class, 10)->create()->make();
    }
}
