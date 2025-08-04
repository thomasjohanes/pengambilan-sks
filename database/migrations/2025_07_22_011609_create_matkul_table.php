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
      Schema::create('matkul', function (Blueprint $table) {
    $table->id();
    $table->string('kode_matkul')->unique();
    $table->string('nama');
    $table->integer('sks');
    $table->integer('semester');
    $table->string('jurusan');
    $table->foreignId('dosen_id')->nullable()->constrained('dosens')->onDelete('set null');
    $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('matkul');
    }
};
