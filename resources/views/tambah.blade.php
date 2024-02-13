<html>
<head>
    <title>Sigma</title>
</head>
<body>
<form action="{{ route('produk.store') }}" method="post">
    @csrf
    <center>
    <table border="1">
        <tr>
            <td>
                <label for="">nama</label>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>
                <label for="">harga</label>
                <input type="text" name="harga">
            </td>
        </tr>
        <tr>
            <td>
                <label for="">stok</label>
                <input type="text" name="stok">
            </td>
        </tr>
        <tr>
            <td align="right">
                <button type="submit">SUBMIT</button>
            </td>
        </tr>
    </table>
</center>
</form>
</body>
</html>
