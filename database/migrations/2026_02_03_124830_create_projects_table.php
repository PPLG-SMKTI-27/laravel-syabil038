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
        $table->text('description'); // Gunakan 'description' (Inggris) agar cocok dengan Controller
        $table->text('tech_stack')->nullable(); // Simpan sebagai text/json
        $table->string('project_url')->nullable();
        // Kolom lainnya jika perlu
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
