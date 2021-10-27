@isset($data)
<table>       
    @foreach ($data as $item)
        <td>{{ $item->no_faktur}}</td>
        <td>{{ $item->kd_pelanggan}}</td>
        <td>{{ $item->tgl_pembelian}}</td>
        <td>{{ $item->kd_barang}}<input type="text" id="kodeBarang{{$item->no_faktur}}" value="{{ $item->kd_barang}}" hidden ></td>
        <td>{{ $item->nm_barang}}</td>
        <td>{{ $item->stok}} <input type="text" id="totalBeli{{$item->no_faktur}}" value="{{ $item->stok}}" hidden>  </td>
        <td>{{ $item->harga_jual}}</td>
        <td>{{ $item->total}}</td>        			
    </tr> 
    @endforeach 
</table>
@endisset
@isset($item)
<button style="bottom: 10%; position: fixed; width: 300px;"  id="CancelOrder" onClick="deleteStok({{ $item->no_faktur}})">Cancel</button>
<button style="bottom: 5px; position: fixed; width: 300px;" onClick="updateStok({{ $item->no_faktur}})">Order</button>
@endisset
