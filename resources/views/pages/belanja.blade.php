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
            <h3> Data Toko Trunojoyo </h3>
        </legend>
        @foreach ($belanja as $toko)
            &nbsp;&nbsp;&nbsp;&nbsp;Nama : {{ $toko['nama'] }} <br>
            @php
                $total = 0;
            @endphp
            @foreach ($toko['belanja'] as $belanja)
                <li> Jenis Pakaian : {{ $belanja['jenis'] }} <br> </li>
                &nbsp;&nbsp;&nbsp;&nbsp; Harga : Rp.{{ $belanja['harga'] }}
                @php
                    $total += $belanja['harga'];
                @endphp
            @endforeach <br><br>

            Total Harga : Rp.{{ $total }}
            @php
                $cashback;
                if ($total > 500000) {
                    $cashback = (10 / 100) * $total;
                } elseif ($total > 250000) {
                    $cashback = (5 / 100) * $total;
                } else {
                    $cashback = 0;
                }
            @endphp
            <br>
            Cashback : {{ $cashback }} <br>
            <strong> Total Bayar : Rp.{{ $total - $cashback }} </strong>
            <hr>
        @endforeach

    </fieldset>
</body>

</html>
