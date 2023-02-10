<?php namespace Shohrux\Yangiliklar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohruxYangiliklar2 extends Migration
{
    public function up()
{
    Schema::table('shohrux_yangiliklar_', function($table)
    {
        $table->renameColumn('files', 'file');
    });
}

public function down()
{
    Schema::table('shohrux_yangiliklar_', function($table)
    {
        $table->renameColumn('file', 'files');
    });
}
}
