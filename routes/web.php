<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//memanggil halaman controlerr student
Route::get('student', [StudentController::class, 'index']);
//memanggil halaman controlerr class
Route::get('class', [ClassController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});





Route::get('/hello', function () {
    return 'heloo word';
});

//memanggil about sebuah file yang telah di buat
Route::get('/about', function () {
    return view('about',[
        //name adalah nama variabel dan mahajalan adalah value (isi)
        'name' => 'mahajalan',
        'kelas' => 'XII RPL B',
        'Mapel' => 'WEB'
    ]);
});

//$id yang di kurung adalah paramenter
// Route::get('/product/{id}', function ($id) {
//     return 'ini adalah produk dengan nomor Id' . $id;
// });

// Route::get('/product/{id}', function ($id) {
//     return view('product.detail',[
//         'id' => $id
//     ]);
// });

//menampilkan detail data sesui dengan id

Route::get('product/{id}', function ($id) {
    $data =[
        [
        'id' =>1,
        'name' => 'oppo',
        'harga' =>1000000,
    ],
    [
        'id' =>2,
        'name' => 'samsung',
        'harga' =>1000000,
    ],
    [
        'id' =>3,
        'name' => 'asus',
        'harga' =>1000000,
    ],
];
 //untuk menapil kan sebuah data yang sudah diinputkan, first untuk nampil 1 data gate untuk lbeh 1
   $cari_data = collect($data) ->where('id',$id) -> first();

   return view('product.detail',[
    'produck' =>$cari_data
   ]);
});


Route::get('siswa/{id}', function ($NIS) {
    $siswa= [
        [
            'id' => 1,
            'nis'=> 123456,
            'nama' => 'adi',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ],
        [
            'id' => 2,
            'nis'=> 23456,
            'nama' => 'moyo',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ],
        [
            'id' => 3,
            'nis'=> 3456,
            'nama' => 'krisna',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ],
        [
            'id' => 4,
            'nis'=> 456,
            'nama' => 'arya',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ],
        [
            'id' => 5,
            'nis'=> 56,
            'nama' => 'maul',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ],
        [

            'id' => 6,
            'nis'=> 6,
            'nama' => 'Zidan',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ]
    ];

    $cari_data = collect($data) ->where('id',$NIS) -> first();
    return view('product.siswa',[
        'datasiswa' =>$cari_data
       ]);

});

//untuk memanggil home
Route::get('/home', function (){

     //mengambil dari data siswa
     $siswa= [
        [
            'id' => 1,
            'nis'=> 123456,
            'nama' => 'adi',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ],
        [
            'id' => 2,
            'nis'=> 23456,
            'nama' => 'moyo',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ],
        [
            'id' => 3,
            'nis'=> 3456,
            'nama' => 'krisna',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ],
        [
            'id' => 4,
            'nis'=> 456,
            'nama' => 'arya',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ],
        [
            'id' => 5,
            'nis'=> 56,
            'nama' => 'maul',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ],
        [

            'id' => 6,
            'nis'=> 6,
            'nama' => 'Zidan',
            'jurusan' => 'rpl',
            'tingkat' => 11,
            'eskul' => 'badmiinton'
        ]
    ];

    return view('home',[
            'nama' => 'DILAN',
            'role' => 'All Role',
            'buah' => ['nanas','mangga','jambu','belimbing'],
            'Siswa'=> $siswa
    ]);
});


