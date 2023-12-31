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
        Schema::create('guru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username');
            $table->string('nik', 16)->unique();
            $table->string('nip', 18)->nullable();
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('email')->unique();
            $table->string('sandi')->nullable();
            $table->string('password');
            $table->string('foto')->nullable();
            $table->string('level');
            $table->string('jk', 1);
            $table->rememberToken();
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
        Schema::dropIfExists('guru');
    }
};
