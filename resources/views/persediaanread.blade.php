<table class="table">
    <tr>
        <th>Kode Barang</th>
        <th>Item</th>
        <th>Jumlah</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
        <th>action</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td><input type="text" id="id{{$item->id}}" value="{{ $item->id}}" hidden></td>
        <td >{{ $item->kd_barang }}<input type="text" id="kdbrg{{$item->id}}" value="{{ $item->kd_barang}}" hidden> </td>
        <td >{{ $item->nm_barang }}<input type="text" id="nmbrg{{$item->kd_barang}}" value="{{ $item->nm_barang}}" hidden></td>
        <td >{{ $item->totalStok }}<input type="text" id="jmlbrg{{$item->id}}" value="{{ $item->totalStok}}" hidden></td>
        <td >{{ $item->hargajual }}<input type="text" id="jualbrg{{$item->id}}" value="{{ $item->hargajual}}" hidden></td>
        <td >{{ $item->hargabeli }}<input type="text" id="hrgLama{{$item->kd_barang}}" value="{{ $item->hargabeli}}" hidden></td>
        <td>
            <button class="btn btn-warning" onClick="detail({{ $item->id }})">Rincian</button>
        </td>
    </tr>
    @endforeach
</table>