{{-- untuk memanggil fie lain --}}
@extends('layout.mainlayout')
@section('title', 'home')

 {{-- untuk menamoung sebuah file dan memindahkannya --}}
@section('content')


    <h2 style="color:blue;">Ini Halaman About yang ad di sini</h2>

    <h3>selamat datang {{$name}}</h3>
    <h3>Kelas:{{$kelas}}</h3>
    <h3>Mapel:{{$Mapel}}</h3>
@endsection

