<?php namespace LuisMayta\Devops\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaDevopsPeliculas extends Migration
{
    public function up()
    {
        Schema::create('luismayta_devops_peliculas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_devops_peliculas');
    }
}
