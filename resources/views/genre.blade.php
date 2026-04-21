<!DOCTYPE html>
<html>
<head>
    <title>Genre</title>
</head>
<body>
    <h1>Data Genre</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
        </tr>

        @foreach($data as $g)
        <tr>
            <td>{{ $g['id'] }}</td>
            <td>{{ $g['nama'] }}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>