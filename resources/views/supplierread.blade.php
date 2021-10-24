<table>     
    @foreach ($data as $item)
        <td>{{ $item->kd_supplier}} <input type="text" id="kdsupp{{$item->id}}" value="{{ $item->kd_supplier}}" hidden></td>
        <td>{{ $item->nm_supplier}} <input type="text" id="nmsupp{{$item->id}}" value="{{ $item->nm_supplier}}" hidden></td>
        <td>{{ $item->alamat}}</td> 	
        <td><button id="SuppButton" onClick="rincian({{$item->id}})">view</button></td>			
    </tr> 
    @endforeach 
</table>