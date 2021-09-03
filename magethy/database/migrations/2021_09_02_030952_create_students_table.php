<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->string('lastname',45);
            $table->string('email',145);
            $table->string('phone',10);
            $table->unsignedBigInteger('work_days_id');
            $table->foreign('work_days_id')->references('id')->on('work_days');
            $table->unsignedBigInteger('files_id');
            $table->foreign('files_id')->references('id')->on('files');
            $table->unsignedBigInteger('teachers_id');
            $table->foreign('teachers_id')->references('id')->on('teachers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
