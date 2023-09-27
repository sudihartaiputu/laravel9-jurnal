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
        Schema::create('jurnal_mengajar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tanggal');
            $table->integer('jam');
            $table->integer('guru_id');
            $table->integer('mapel_id');
            $table->integer('kelas_id');
            $table->string('materi');
            $table->string('jumlahsiswa');
            $table->string('alfa');
            $table->string('izin');
            $table->string('sakit');
            $table->string('bolos');
            $table->string('foto');
            $table->string('slug');
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
        Schema::dropIfExists('jurnal_mengajar');
    }
};
