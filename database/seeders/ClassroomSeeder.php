<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Classroom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //disable foregenkey
        Schema::disableForeignKeyConstraints();
        //mengosongkan isi data pada table class
        Classroom::truncate();
        //enable foriegen key untuk menghidupkan kembali foregen key
        Schema::enableForeignKeyConstraints();

        //menjalankan seed->php artisan db:seed  --class=ClassroomSeeder
        // DB::table('class')-> insert( [
        //     'nama_kelas' => '12 RPL D',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        //multype insert mengrim data lebih dari 1

        $data =[
            ['nama_kelas' => '12 RPL a'],
            ['nama_kelas' => '12 RPL b'],
            ['nama_kelas' => '12 RPL c'],
            ['nama_kelas' => '12 RPL d']
        ];
        //insert ke databases
        foreach ($data as $value) {
            DB::table('class')-> insert([
            'nama_kelas' => $value ['nama_kelas'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
             ]);
        }

    }
}
