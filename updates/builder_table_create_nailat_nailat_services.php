<?php namespace Nailat\Nailat\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNailatNailatServices extends Migration
{
    public function up()
    {
        Schema::create('nailat_nailat_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->unique()->index();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nailat_nailat_services');
    }
}
