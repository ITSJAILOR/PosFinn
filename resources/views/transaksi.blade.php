<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!--Script animation side bar-->
<script src="SideScript.js"></script>
</head>
<body>

<div class="main">
  <div class="konten">
  <span class="sidebutton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <input type="text" id="id" placeholder="Cari Id"><br>
  <input type="text" id="kdBrg" placeholder="Cari Barang"><br>
  <input type="text" id="nmBarang" placeholder="Nama Barang">
  <input type="text" id="hrgBarang" placeholder="Harga">
  <input type="text" id="persediaan" placeholder="persediaan">
  <input type="text" id="jmlBeli" placeholder="Jumlah" onchange="jumlah()">
  <input type="text" id="Total" placeholder="Total">
  <div id="read"></div>

  <button class="Orderbutton" style="bottom: 5px; position: fixed; width: 100%; left: 0;" onclick="openChart()">Order</button>
  </div>

  <div id="mySidenav" class="sidenav" style="left: 0;"></div>

  <div id="mySidenav2" class="HalfSide OrderSide" >
    
  <a href="javascript:void(0)" class="closebtn" style="color: #6F73D2 !important;" onclick="closeNav()">&times;</a>
  <input type="text" name="" placeholder="Order Pin">
  <input type="text" name="" placeholder="Table">
  <div id="notaPenjualan"></div>
  <button style="bottom: 5px; position: fixed; width: 300px;">Order</button>
  </div>
</div>   
<script> 


        $(document).ready(function () {
                  read()
                  nota()
              })
        //Read Database
        function read() {
                $.get("{{url('/barang/read')}}",function (data, status) {          
                    $("#read").html(data);
                });
        }
        nota = () =>{
          $.get("{{url('/penjualan/read')}}",function (data, status) {          
                    $("#notaPenjualan").html(data);
                });
        }
        const detail = (id) => {
        var CariId =$("#id" + id).val(); 
        var CariBarang =$("#kdbrg" + id).val();  
        var CariBarang2 =$("#nmbrg" + id).val();
        var CariHarga =$("#jualbrg" + id).val();
        var CariJumlah =$("#jmlbrg" + id).val();
        document.getElementById("id").value = CariId;
        document.getElementById("kdBrg").value = CariBarang;
        document.getElementById("nmBarang").value = CariBarang2;
        document.getElementById("hrgBarang").value = CariHarga;
        document.getElementById("persediaan").value = CariJumlah;
        $("#jmlBeli").focus();
        };
        
        function jumlah() {
          var Kaliin = document.getElementById("jmlBeli").value;
          var Kaliin2 = document.getElementById("hrgBarang").value;
          document.getElementById("Total").value = Kaliin * Kaliin2 ;
          store();
          nota();          
          
         } 

        
          function store() {
            var Id = $("#id").val();
            var KdBarang = $("#kdBrg").val();
            var NmBarang = $("#nmBarang").val();
            var totalStok = parseInt($("#persediaan").val());
            var Jumlah = parseInt($("#jmlBeli").val());
            var HargaJual = $("#hrgBarang").val();
            var Total = $("#Total").val();

            // if hargaLama == HargaBeli {update jumlah barang} else {tambah barang}
            $.ajax({
              type: "get",
              url: "{{ url('/penjualan/store')}}",
              data: {
                Id,
                KdBarang,
                NmBarang,
                Jumlah,
                HargaJual,
                Total
                },
              success: function(data){                                  
                console.log("sukses");
                (totalStok >= Jumlah) 
                ? updateStok(Id) 
                : deleteStok(Id);
                nota();
              },
              error: function(data) {console.log("error", status.responseText)}
            });
          }
          
          updateStok = (id) => {            
            var totalStok = $("#persediaan").val();
            var Jumlah = $("#jmlBeli").val();
            var UpdateStok = stok - Jumlah;
            $.ajax({
              type : "get",
              url  : "{{ url('penjualan/update')}}/" + id,
              data: {UpdateStok},
              success:function(data){
                console.log("sukses");
                (totalStok == 0) ? deleteStok(id) : "" ;
                read();
              },
              error:function(data){
                console.log("error", status.responseText);
              }
            });
          }

          deleteStok = (id) => {            
            $.ajax({
              type : "get",
              url  : "{{ url('supplier/destroy')}}/" + id,
              data: {},
              success:function(data){
                console.log("sukses");
                read();
              },
              error:function(data){
                console.log("error", status.responseText);
              }
            });
          }
          var input2 = document.getElementById("jmlBeli");
          input2.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
            event.preventDefault();
            $("#kdBrg").focus();
            }
          });

          var input = document.getElementById("kdBrg");
          input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
            event.preventDefault();
              $("#jmlBeli").focus();
            }
          });

          // function setFocusToTextBox(){
          //     $("#mytext").focus();
          // }

</script>
</body>

</html> 
