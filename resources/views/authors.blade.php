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
        <th>Nama</th>
        <th>Email</th>
    </tr>

    @foreach($authors as $a)
    <tr>
        <td>{{ $a->id }}</td>
        <td>{{ $a->nama }}</td>
        <td>{{ $a->email }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>