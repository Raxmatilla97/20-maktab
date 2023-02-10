<?php namespace Shohrux\Yangiliklar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohruxYangiliklar3 extends Migration
{
    public function up()
{
    Schema::table('shohrux_yangiliklar_', function($table)
    {
        $table->dropColumn('images_media');
    });
}

public function down()
{
    Schema::table('shohrux_yangiliklar_', function($table)
    {
        $table->string('images_media', 255)->nullable();
    });
}
}
