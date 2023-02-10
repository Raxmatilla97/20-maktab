<?php namespace Shohrux\Yangiliklar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohruxYangiliklar extends Migration
{
    public function up()
{
    Schema::table('shohrux_yangiliklar_', function($table)
    {
        $table->string('files')->nullable();
    });
}

public function down()
{
    Schema::table('shohrux_yangiliklar_', function($table)
    {
        $table->dropColumn('files');
    });
}
}
