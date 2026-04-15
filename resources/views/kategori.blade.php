<!DOCTYPE html>
<html>
<head>
    <title>Kelola Kategori</title>
</head>
<body>

<h2>Kelola Kategori</h2>

<table border="1">
    <tr>
        <th>Nama Kategori</th>
        <th>Deskripsi</th>
    </tr>

    @foreach($data as $item)
    <tr>
        <td>{{ $item['nama_kategori'] }}</td>
        <td>{{ $item['deskripsi'] }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>