<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->text('deskripsi');
        $table->string('kategori');
        $table->string('warna');
        $table->string('icon');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::dropIfExists('projects');
}
};
