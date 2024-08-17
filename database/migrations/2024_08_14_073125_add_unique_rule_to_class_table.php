<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('class', function (Blueprint $table) {
            //membuat nama kelas menjadi uniqe
            // $table->string('nama_kelas', 10)->unique()->change();
            //cara pendek
            $table->unique('nama_kelas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('class', function (Blueprint $table) {
            //menghilangkan unique pada kolom nama_kelas
            $table->dropUnique('class_nama_kelas_unique');
        });
    }
};
