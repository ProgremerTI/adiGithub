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
        Schema::table('students', function (Blueprint $table) {
            //menambahkan clas id pada table students
            $table->unsignedBigInteger('class_id')->required()->after('nis');
            //membuat forgen key
            //on clas isi nama table yg terhubung
            //references untuk primary key yg terhubung
            $table->foreign('class_id')->references('id')->on('class')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //untuk menghapus foregen key
            $table->dropForeign(['class_id']);
            //untuk mneghapus colum
            $table->dropColumn('class_id');
        });
    }
};
