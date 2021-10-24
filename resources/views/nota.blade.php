<table>   
    <p>No Faktur {{$data['no_faktur']}}</p>
    <p>Supplier {{$data['kd_subjek']}}</p>
    <p>Tanggal {{$data['tgl_pembelian']}}</p>
    
    @foreach ($rincian as $item)
        <td>{{ $item->kd_barang}}</td>
        <td>{{ $item->nm_barang}}</td>
        <td>{{ $item->stok}}</td>
        <td>{{ $item->harga_beli}}</td>
        <td>{{ $item->total}}</td>        			
    </tr> 
    @endforeach 
</table>