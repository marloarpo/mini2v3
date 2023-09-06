<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovePasswordColumnFromClimbersTable extends Migration
{
    public function up()
    {
        Schema::table('climbers', function (Blueprint $table) {
            $table->dropColumn('password');
        });
    }

    public function down()
    {
        Schema::table('climbers', function (Blueprint $table) {
            $table->string('password')->nullable(false);
        });
    }
}
