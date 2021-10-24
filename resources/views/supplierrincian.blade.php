
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<div class="formgroup">	
    <p>Kode Supplier<input type="text" name="" id="KdSupplier"></p>
    <p>Nama Suplier <input type="text" name="" id="NmSupplier"></p>
    <p>Alamat       <input type="text" name="" id="AlSupplier"></p>
    <input type="button" name="" id="" value="Simpan" onclick="store()"
    @foreach ($data as $item)>
    </div><table>       	
        <p>Kode Supplier:{{ $item->kd_supplier}}</p>
        <p>Nama Supplier:{{ $item->nm_supplier}}</p>
        <p>Alamat :{{ $item->alamat}}</p> 	
        <span><button onClick="edit({{$item->id}})">Ubah</button></span>	
        <span><button onClick="destroy({{$item->id}})">Hapus</button></span>		
    </tr> 
    @endforeach 

</table>
<script>    
    function edit(id){      
      $.get("{{ url('supplier/edit')}}/" + id, function (data, status){ @foreach ($data as $item)
        document.getElementById("KdSupplier").value = "{{$item->kd_supplier}}";
        document.getElementById("NmSupplier").value = "{{ $item->nm_supplier}}";
        document.getElementById("AlSupplier").value ="{{ $item->alamat}}";        
      @endforeach });
    }
</script>