<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //dd(RolesSeeder::class);// Puedo vel el nombre de la clase en consola php artisan db:seed
        
        $this->truncateTables(['roles','permisos']); // tablas que queremos limpiar

        //$this->call([RolesSeeder::class,TablaRolesSeeder::class]);
        $this->call([TablaRolesSeeder::class, TablaPermisosSeeder::class]);
    }


    /**
     * Eliminas los datos de las tablas que resiva como parametro 
     */

    protected function truncateTables(array $tables){
        // Desactivar la revision de llaver foraneas
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;');


            foreach($tables as $table) {
                //Eliminar los datos de la tabla para que se repital
                DB::table($table)->truncate();
            }
        

        // Activar la revision de llaver foraneas        
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
