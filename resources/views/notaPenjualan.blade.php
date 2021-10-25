<table>       
    @foreach ($data as $item)
        <td>{{ $item->no_faktur}}</td>
        <td>{{ $item->kd_pelanggan}}</td>
        <td>{{ $item->tgl_pembelian}}</td>
        <td>{{ $item->kd_barang}}</td>
        <td>{{ $item->nm_barang}}</td>
        <td>{{ $item->stok}}</td>
        <td>{{ $item->harga_jual}}</td>
        <td>{{ $item->total}}</td>        			
    </tr> 
    @endforeach 
</table>