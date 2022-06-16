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
        Schema::create('profile_telephone', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('telephone_id');
            $table->unsignedBigInteger('profile_id');
            $table->string('number');

            $table->foreign('telephone_id')->references('id')->on('telephones')->onDelete('cascade');
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_telephone');
    }
};
