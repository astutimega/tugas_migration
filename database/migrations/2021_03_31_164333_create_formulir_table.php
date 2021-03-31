<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->char('npm', 11);
            $table->foreign('npm')->references('npm')->on('collage_students');
            $table->char('semester', 6);
            $table->char('kode_matkul',8);
            $table->foreign('kode_matkul')->references('kode_matkul')->on('courses');
            $table->string('th_ajaran', 10);
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
        Schema::dropIfExists('formulirs');
    }
}
