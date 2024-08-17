@extends('layout.mainlayout')

@section('tittel', 'Class')

@section('content')

    <h1>ini halman kelas</h1>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
