<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->char('kode_matkul', 8);
            $table->foreign('kode_matkul')->references('kode_matkul')->on('courses');
            $table->char('nidn', 10);
            $table->foreign('nidn')->references('nidn')->on('lectures');
            $table->char('kelas', 2);
            $table->char('hari', 15);
            $table->time('jam_mulai', $precision = 0);
            $table->time('jam_selesai', $precision = 0);
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
        Schema::dropIfExists('schedules');
    }
}
