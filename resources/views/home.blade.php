  {{-- untuk memanggil isi file lain --}}
  @extends('layout.mainlayout')

  @section('title','home')

 {{-- untuk menamoung sebuah file dan memindahkannya --}}
  @section('content')
    <div class="mt-5">
   <h1>Selamat Datang {{$nama}} role Anda {{$role}} </h1>

    @if($role == 'All Role')
            <a href="">Menuju halaman Admin</a>
    @elseif($role == 'petugas')
             <a href="">menuju halaman petugas</a>
    @else
   <h4>anda tidak ada role</h4>
    @endif


  <br>
 {{-- perulangan foreach --}}
            {{-- @foreach ($buah as $suka)
                 {{$suka}} <br>
            @endforeach --}}

            <table class="table">

                 <thead>
                    <tr>
                        <td>No</td>
                        <td>Nis</td>
                        <td>Nama siswa</td>
                        <td>Jurusan</td>
                        <td>Tingkat</td>
                        <td>ekskul</td>
                    </tr>
                 </thead>

                 <tbody>
                    @foreach ($Siswa as $data )
                         <tr>
                            <td>{{$loop ->iteration}}</td>
                            <td>{{$data['nis']}}</td>
                            <td>{{$data['nama']}}</td>
                            <td>{{$data['jurusan']}}</td>
                            <td>{{$data['tingkat']}}</td>
                            <td>{{$data['eskul']}}</td>
                         </tr>

                    @endforeach
                 </tbody>
                </table>
            </div>
                @endsection

