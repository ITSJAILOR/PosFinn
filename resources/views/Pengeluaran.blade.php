<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    
<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!--Script animation side bar-->
    <script src="SideScript.js"></script></head>
<style>  
.masukan{
  width: 100%;
  position: relative;
  z-index: 1;
  right: 10px;
  border-radius: 24px;
  background-color: #F4F5F6;
  overflow-x: hidden;
  transition: 0.5s;
  padding: 10px;
  margin-bottom: 10px;
  display: block;
}
.Separuh{
  width: 50%;
  position: relative;
  z-index: 1;
  right: 10px;
  border-radius: 24px;
  background-color: #F4F5F6;
  overflow-x: hidden;
  transition: 0.5s;
  padding: 10px;
  margin-bottom: 10px;
  display: block;
}
</style>

<body>
<!-- Modal HTML embedded directly into document -->
<div id="ex1" class="modal">
    <div id="carisupplier"></div>
  <a href="#" rel="modal:close">Close</a>
</div>


<div class="main">
  <div class="masukan">
    <span class="sidebutton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <form action="">
    <span>No invoice<input type="id" id="Faktur"> </span>
    <input type="text" id="NoSupplier" hidden placeholder="No Supplier" >
    <span>No Supplier<input type="text" id="NmSupplier" onchange="cariSup()" placeholder="Nama Supplier">
      <a href="#ex1" rel="modal:open"><button>Cari</button></a>
    </span>
    <span>Tanggal<input type="date" id="Tanggal" value="{{date('Y-m-d')}}"></span><br>
    <form action="" style="display:inline!important;">
    <input type="text" id="KdBarang" placeholder="KdBarang" onchange="cariBarang()">
    <input type="text" id="NmBarang" placeholder="NmBarang">
    <input type="number" id="Jumlah" placeholder="Jumlah" onchange="jumlah()">
    <input type="number" id="HargaBeli" placeholder="HargaBeli" onchange="jumlah()">
    <input type="number" id="Total" placeholder="Total">
    <input type="button" value="Tambah" onclick="store()">
    </form>
    </form>
    
  <button class="Orderbutton" style="bottom: 5px; position: fixed; width: 100%; left: 0;" onclick="openChart()">Daftar Supplier</button>
  </div>
  <div class="Separuh"> 
    <div id="faktur"></div>    
    <input type="button" value="Simpan" onclick="read()">
  </div>
  <div id="mySidenav" class="sidenav" style="left: 0;"></div>

  <div id="mySidenav2" class="Separuh halfside" style="right: 0;">
  <div id="read"></div>
  <div> <input type="text" id="caribarang" hidden></div>
  <a href="javascript:void(0)" class="closebtn" style="color: #6F73D2 !important;" onclick="closeNav()">&times;</a>
  </div>
</div>   

</body>
<script>
  $(document).ready(function () {  
    read()    
    $.get("{{url('/supplier/read')}}", function (data, status){$("#carisupplier").html(data);});
  })

  function read() {
  $.get("{{url('/pembelian/read')}}/",function (data,status){
    $("#read").html(data);
  });  
  }
  function jumlah() {
    var Kaliin = document.getElementById("Jumlah").value;
    var Kaliin2 = document.getElementById("HargaBeli").value;
    document.getElementById("Total").value = Kaliin * Kaliin2 ;
  }
  function show(Faktur) {
   $.get("{{url('/pembelian/read')}}/"+Faktur,function (data,status){
    $("#faktur").html(data);
   });  
  }
  
  function cariSup(){
    var CariData =$("#NmSupplier").val(); 
    $("#SuppButton").html('Pilih');

    $.ajax({
      type : "get",
      url  : "{{ url('supplier/cari')}}",
      data: {CariData},
      success:function(data){
        $("#carisupplier").html(data);
      },
      error: function(data){
        console.log("error", status.responseText);
      }
    });
    } 
  
  const rincian = (id) => {
  // function rincian(id){    
    var CariData =$("#kdsupp" + id).val();  
    var CariData2 =$("#nmsupp" + id).val(); 
    document.getElementById("NoSupplier").value = CariData;
    document.getElementById("NmSupplier").value = CariData2;
  };

  const  cariBarang = () => {
    let KdBarang = $("#KdBarang").val(); 
    
    $.get("{{url('/barang/read')}}", function (data, status){$("#caribarang").html(data);});
    $.ajax({
      type : "get",
      url  : "{{ url('barang/cari')}}",
      data: {KdBarang},
      success:function(data){
        let CariData2 =$("#nmbrg" + KdBarang).val();
        // let CariHarga =$("#hrgLama" + KdBarang).val(); 
        document.getElementById("NmBarang").value = CariData2;
      },
      error: function(data){
        console.log("error", status.responseText);
      }
    });

  }
  function store() {
    var Faktur = $("#Faktur").val();
    var NoSupplier = $("#NoSupplier").val();
    var Tanggal = $("#Tanggal").val();
    var KdBarang = $("#KdBarang").val();
    var NmBarang = $("#NmBarang").val();
    var Jumlah = $("#Jumlah").val();
    var HargaBeli = $("#HargaBeli").val();
    var hargaLama = $("#HargaLama").val();
    var Total = $("#Total").val();

    // if hargaLama == HargaBeli {update jumlah barang} else {tambah barang}
    $.ajax({
      type: "get",
      url: "{{ url('/pembelian/store')}}",
      data: {
        Faktur,
        NoSupplier,
        Tanggal,
        KdBarang,
        NmBarang,
        Jumlah,
        HargaBeli,
        Total
        },
      success: function(data){
        console.log("sukses");
        show(Faktur)
      },
      error: function(data) {console.log("error", status.responseText)}
    });
  }

</SCript>
</html>