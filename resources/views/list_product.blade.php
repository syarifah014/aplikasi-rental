@extends('layout.list')

@section('title', 'Ini adalah judul dari meta')
@section('content')

<table>
    <head>
        <tr>
            <th>ID</th>
            <th>Produk</th>
        </tr>
        <thead>
            <tbody>
                @foreach ($data as $post)
                    <tr>
                        <td>{{ $post['id']}}</td>
                        <td>{{ $post['produk'] }}</td>
                        <!-- data lainnya -->
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </head>
</table>
@endsection