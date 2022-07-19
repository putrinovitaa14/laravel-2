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
            <h3> Data Mahasiswa </h3>
        </legend>
        @foreach ($mahasiswa as $kuliah)
            @php
                $total = 0;
            @endphp
            Nama Dosen : {{ $kuliah['dosen'] }} <br>
            Mata Kuliah : {{ $kuliah['matakuliah'] }} <br>
            Mahasiswa : <br>
            @foreach ($kuliah['mahasiswa'] as $mahasiswa)
                <ol>
                    Nama : {{ $mahasiswa['nama'] }} <br>
                    Nilai : {{ $mahasiswa['nilai'] }}
                </ol>
                @php $total += $mahasiswa['nilai'] @endphp
            @endforeach
            @php $ratarata = $total / count($kuliah['mahasiswa']) @endphp
            Total Nilai : {{ $total }} <br>
            Rata Rata : {{ $ratarata }} <br>
            <hr>
        @endforeach

    </fieldset>
</body>

</html>
