<!DOCTYPE html>
<html>
<head>
    <title>Book</title>
</head>
<body>

<h1>Data Book</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Author</th>
    </tr>

    @foreach($books as $b)
    <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->judul }}</td>
        <td>{{ $b->author->nama }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>