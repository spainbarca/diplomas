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


        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('paternal_lastname');
            $table->string('maternal_lastname');
            $table->string('names');
            $table->string('alias');
            $table->text('biography');
            $table->date('datebirth');

            $table->unsignedBigInteger('gender_id')->nullable();
            $table->unsignedBigInteger('civilstate_id')->nullable();

            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('civilstate_id')->references('id')->on('civil_states')->onDelete('set null')->onUpdate('cascade');

            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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

        Schema::dropIfExists('profiles');
    }
};
