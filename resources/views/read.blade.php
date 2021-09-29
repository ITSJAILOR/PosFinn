<table class="table">
    <tr>
        <th>id</th>
        <th>Item</th>
        <th>Jumlah</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
        <th>action</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td >{{ $item->kd_barang }}</td>
        <td >{{ $item->nm_barang }}</td>
        <td >{{ $item->jumlah_barang }}</td>
        <td >{{ $item->harga_jual }}</td>
        <td >{{ $item->harga_beli }}</td>
        <td>
            <button class="btn btn-warning" onClick="edit({{ $item->id }})">Edit</button>
            <button class="btn btn-danger" onClick="destroy({{ $item->id }})">Delete</button>
        </td>
    </tr>
    @endforeach
</table>