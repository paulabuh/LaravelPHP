<?php

use Illuminate\Database\Seeder;
use App\Models\Materia;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Materia::class, 25)->create()->make();
    }
}
