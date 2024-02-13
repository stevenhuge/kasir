<!DOCTYPE html>
<html lang="en">
<head>
    <title>Produk</title>
</head>
<body>
    
    <table>
        <thead>
            <th>NAMA</th>
            <th>HARGA</th>
            <th>STOK</th>
        </thead>
        @foreach ($Produk as $row)
        <tbody>
            <td>{{ $row->name }}</td>
            <td>{{ $row->harga  }}</td>
            <td>{{ $row->stok }}</td>
            <td>
                {{-- <form action="{{ route('produk.destroy') }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{ $row->id }}">
                    <button type="submit">Delete</button>
                </form> --}}
                <a href="{{ route('produk.destroy', $row->id) }}">Delete</a>
            </td>
        </tbody>
        @endforeach
    </table>
</body>
</html>