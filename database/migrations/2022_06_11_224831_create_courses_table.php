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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->date('date_published');
            $table->date('date_finish');
            $table->boolean('status');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('instructor_id')->nullable();

            $table->foreign('instructor_id')
                    ->references('id')->on('instructors')
                    ->onDelete('set null');

            $table->foreign('category_id')
                    ->references('id')->on('categories')
                    ->onDelete('set null');

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
        Schema::dropIfExists('courses');
    }
};
