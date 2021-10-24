<table>     
    <tr>
        <th>Invoice</th>
        <th>Supplier</th>
        <th>Tanggal</th>
        <th>Pembelian</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->no_faktur}}</td>
        <td>{{ $item->kd_subjek}}</td>
        <td>{{ $item->tgl_pembelian}}</td>
        <td>{{ $item->jmlTotal}}</td>        			
    </tr> 
    @endforeach 
</table>