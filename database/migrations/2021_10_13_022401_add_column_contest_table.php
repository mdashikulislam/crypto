
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnContestTable extends Migration
{
    public function up()
    {
        Schema::table('contests', function (Blueprint $table) {
            $table->text('wallet')->nullable();
        });
    }

    public function down()
    {
        Schema::table('contests', function (Blueprint $table) {
            //
        });
    }
}
