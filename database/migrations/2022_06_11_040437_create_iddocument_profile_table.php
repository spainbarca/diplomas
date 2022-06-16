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
        Schema::create('iddocument_profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iddocument_id');
            $table->unsignedBigInteger('profile_id');
            $table->foreign('iddocument_id')->references('id')->on('id_documents')->onDelete('cascade');
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
        Schema::dropIfExists('iddocument_profile');
    }
};
