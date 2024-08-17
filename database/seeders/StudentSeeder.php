<?php

namespace Database\Seeders;


use mt;
use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [

                ['name'=>'adi'],
                ['name'=>'arip'],
                ['name'=>'krisna'],
                ['name'=>'moyo'],
                ['name'=>'maul'],
                ['name'=>'gilbert'],
                ['name'=>'farhan'],
                ['name'=>'zidan'],
                ['name'=>'abdhee'],
                ['name'=>'acong'],
                ['name'=>'agung'],



            ];
            foreach ($data as $value) {
                DB::table('students')-> insert([
                        'name'=> $value['name'],
                        'gender'=>Arr::random(['l', 'p']),
                        'nis' =>mt_rand(000000001,999999999),
                        'class_id'=> Arr::random([1, 2, 3, 4]),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                ]);

    }
}
}
