<?php

use App\Models\Propietario;
use Illuminate\Database\Seeder;

class PropietarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Propietario::class, 20)->create();
    }
}
