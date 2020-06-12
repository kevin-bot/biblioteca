<?php

use App\Models\Permiso;
use Illuminate\Database\Seeder;

class TablaPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * El modelo y el numero de registros
         */
        factory(Permiso::class,30)->create();
    }
}
