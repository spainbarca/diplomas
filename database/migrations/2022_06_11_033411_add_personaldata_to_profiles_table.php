<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Schema::table('profiles', function (Blueprint $table) {

        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('paternal_lastname');
            $table->dropColumn('maternal_lastname');
            $table->dropColumn('names');
            $table->dropColumn('alias');
        }); */
    }
};
