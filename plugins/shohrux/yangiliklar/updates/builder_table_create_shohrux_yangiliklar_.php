<?php namespace Shohrux\Yangiliklar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohruxYangiliklar extends Migration
{
    public function up()
{
    Schema::create('shohrux_yangiliklar_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('yangilik_nomi')->nullable();
        $table->string('yangilik_manzili')->nullable();
        $table->text('content')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->string('images_media')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('shohrux_yangiliklar_');
}
}
