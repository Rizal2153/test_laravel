<!DOCTYPE html>
<html>
<head>
    <title>Crud Barang - hairulrizal.com</title>
</head>
<body>
    <h2>Data barang</h2>

    <a href="/barang/tambah"> + Tambah Barang Baru</a>

    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Created Date</th>
            <th>Modified Date</th>
        </tr>
        @foreach ($barang as $b)
        <tr>
            <td>{{ $b->kode_barang }}</td>
            <td>{{ $b->nama_barang }}</td>
            <td>{{ $b->harga_barang }}</td>
            <td>{{ $b->created_date }}</td>
            <td>{{ $b->modified_date }}</td>
            <td>
                <a href="/barang/edit/{{ $b->id_barang }}">Edit</a>
                |
                <a href="/barang/hapus/{{ $b->id_barang}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>



</body>
</html>