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
       Schema::create('dosen', function (Blueprint $table) {
        $table->id();
        $table->string('nidn')->unique();
        $table->string('nama');
        $table->string('email')->unique()->nullable();
        $table->string('password')->nullable();
        $table->string('jurusan');
        $table->string('no_hp')->nullable();
        $table->text('alamat')->nullable();
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
        Schema::dropIfExists('dosen');
    }
};
