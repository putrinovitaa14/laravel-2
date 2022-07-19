<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>
            Data Universitas
        </legend>
        <br>
        @foreach ($kampus as $kuliah)
            Nama Dosen : {{ $kuliah['dosen'] }} <br>
            Nomor induk Dosen : {{ $kuliah['induk'] }} <br>
            Mahasiswa : </strong>
            @foreach ($kuliah['mahasiswa'] as $mahasiswa)
                <br>
                Nama : {{ $mahasiswa['nama'] }} <br>
                Nomer Induk : {{ $mahasiswa['noinduk'] }} <br>
                Jurusan Mahasiswa: {{ $mahasiswa['jurusan'] }} <br>
                Mata Kuliah :
                @foreach ($mahasiswa['matakuliah'] as $matakuliah)
                    <li>{{ $matakuliah }}</li>
                @endforeach
            @endforeach
            <hr>
            <br>
        @endforeach

    </fieldset>
</body>

</html>
