<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>

        <tr>
            <td>nis</td>
            <td>:</td>
            <td>{{ $datasiswa ['nis']}}</td>
        </tr>
        <tr>
            <td>nama</td>
            <td>:</td>
            <td>{{$datasiswa ['nama'] }}</td>
        </tr>
        <tr>
            <td>kelas</td>
            <td>:</td> 
            <td>{{$datasiswa ['tingkat'] }}</td>
        </tr>
        <tr>
            <td>jurusan</td>
            <td>:</td>
            <td>{{ $datasiswa ['jurusan'] }}</td>
        </tr>
        <tr>
            <td>eskul</td>
            <td>:</td>
            <td>{{ $datasiswa ['eskul'] }}</td>
        </tr>
    </table>
</body>
</html>