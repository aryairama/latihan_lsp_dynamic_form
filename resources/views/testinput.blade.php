<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('test.test')}}" method="get">
        <label for="">Masukkan Jumlah Input</label>
        <input type="text" name="input" value="{{Request::get('input')}}">
        <button type="submit">klik</button>
        <br>
        <br>
        <label for="">Jumlah Kolom : {{ $input }}</label>
        @if ($input)
        @for ($i = 1; $i <= $input; $i++) <br><label for="">Mata Pelajaran {{ $i }}</label>
            <input type='test' name="pelajaran{{ $i }}">
            <label for="">Jam</label>
            <input type="text" name="jam{{ $i }}">
            <label for="">Nilai</label>
            <input type="text" name="nilai{{ $i }}">
            @endfor
            @endif
            @if ($input)
            <input type="submit" name="kirim" value="kirim">
            @endif
            @if ($arr ?? '')
            <table border="1">
                <thead>
                    <tr>
                        <th>Mapel</th>
                        <th>Jam</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @for ($i = 0; $i < $input; $i++)
                            <tr>
                                <td>{{ $mapel[$i+1] }}</td>
                                <td>{{ $jam[$i+1] }}</td>
                                <td>{{ $nilai[$i+1] }}</td>
                            </tr>
                        @endfor
                        <tr>
                            <td colspan="3">
                                @php
                                $total = array_sum($arr) / $input;
                                print_r($total);
                                @endphp</td>
                        </tr>
                    </tr>
                </tbody>
            </table>
            @endif
    </form>
</body>

</html>
