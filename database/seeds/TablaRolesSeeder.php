<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Roles de nuestro sistema
        $roles  = ['administrador', 'editor', 'supervisor'];

        foreach ($roles as $key => $value) {
            //DB::insert('INSERT INTO roles (nombre) values (?,?)', ['kevin']);
            DB::table('roles')->insert([
                'nombre'=>$value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);
            
        }
        
    }
}
