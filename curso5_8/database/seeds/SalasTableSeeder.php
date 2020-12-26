<?php

use Illuminate\Database\Seeder;
use App\Models\Sala;

class SalasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Sala::create([
       //     'nome' => 'Sala02',
       //     'qtdAlunos' => 10,
        //    'ativo' => 0,
       //     'projetor' => 1
        //]);

        factory(App\Models\Sala::class, 50)->create()->make();

    }
}
