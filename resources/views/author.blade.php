<!DOCTYPE html>
<html>
<head>
    <title>Author</title>
</head>
<body>
    <h1>Data Author</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama Author</th>
        </tr>

        @foreach($data as $a)
        <tr>
            <td>{{ $a['id'] }}</td>
            <td>{{ $a['nama'] }}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>