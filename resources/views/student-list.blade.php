{{-- untuk memanggil fie lain --}}
@extends('layout.mainlayout')
@section('title', 'Students')

 {{-- untuk menamoung sebuah file dan memindahkannya --}}
@section('content')


    <h2>Ini Halaman Sudents</h2>
    <table class="table">
        <thead>
            <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama Siswa</th>
            <th>Gender</th>
            <th>Kelas</th>
            </tr>
        </thead>

        <tbody>
            {{-- $siswa dari controller yang ada di dalam $dats --}}
            @foreach ( $siswa as $data )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nis}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->class_id}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection

