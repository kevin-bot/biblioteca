<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
           // $table->string('new')->after('nombre');
        });
    }

    /**
     * Reverse the migrations.
     *  EL código se hace de la forma inversa
     * @return void
     */
    public function down()
    {   
        Schema::table('usuarios', function (Blueprint $table) {
           // $table->dropColumn('new');
        });
    }
}
