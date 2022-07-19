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
            Data mahasiswa
        </legend>

        @foreach ($nilai as $siswa)
            @php
                $total = 0;
            @endphp

            Nama : {{ $siswa['nama'] }} <br>

            Jurusan : {{ $siswa['jurusan'] }} <br>

            @foreach ($siswa['matapelajaran'] as $matpel)
                <li>Pelajaran : {{ $matpel['matpel'] }} <br>
                <li> Nilai : {{ $matpel['Nilai'] }} <br></li>
                @php $total += $matpel['Nilai'] @endphp
            @endforeach
            @php $rata = $total / count($siswa['matapelajaran']) @endphp
            Total Nilai : {{ $total }} <br>
            Rata Rata : {{ $rata }} <br>
            </li>

            @php
                $grade;
                if ($rata >= 85 && $rata <= 100) {
                    $grade = 'A';
                } elseif ($rata >= 75 && $rata <= 84) {
                    $grade = 'B';
                } elseif ($rata >= 60 && $rata <= 75) {
                    $grade = 'C';
                } elseif ($rata >= 50 && $rata <= 59) {
                    $grade = 'D';
                } elseif ($rata >= 49) {
                    $grade = 'E';
                } else {
                    $grade = 0;
                }
            @endphp
            <br>
            Grade : {{ $grade }} <br>
            <hr>
        @endforeach

    </fieldset>
</body>

</html>
