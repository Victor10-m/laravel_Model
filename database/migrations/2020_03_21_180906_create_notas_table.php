<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';

            $table->Increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->boolean('status');
            $table->Integer('clasificacion');
            $table->text('tipo');
            $table->timestamps();



      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
