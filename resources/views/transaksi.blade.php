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
        var CariBarang =$("#kdbrg" + id).val();  
        var CariBarang2 =$("#nmbrg" + id).val();
        var CariHarga =$("#jualbrg" + id).val();
        var CariJumlah =$("#jmlbrg" + id).val();
        document.getElementById("kdBrg").value = CariBarang;
        document.getElementById("nmBarang").value = CariBarang2;
        document.getElementById("hrgBarang").value = CariHarga;
        document.getElementById("persediaan").value = CariJumlah;
        };
        
        function jumlah() {
          var Kaliin = document.getElementById("jmlBeli").value;
          var Kaliin2 = document.getElementById("hrgBarang").value;
          document.getElementById("Total").value = Kaliin * Kaliin2 ;
          store();
          nota();
         } 

        
          function store() {
            var KdBarang = $("#kdBrg").val();
            var NmBarang = $("#nmBarang").val();
            var Jumlah = $("#jmlBeli").val();
            var HargaJual = $("#hrgBarang").val();
            var Total = $("#Total").val();

            // if hargaLama == HargaBeli {update jumlah barang} else {tambah barang}
            $.ajax({
              type: "get",
              url: "{{ url('/penjualan/store')}}",
              data: {
                KdBarang,
                NmBarang,
                Jumlah,
                HargaJual,
                Total
                },
              success: function(data){
                console.log("sukses");
                nota();
              },
              error: function(data) {console.log("error", status.responseText)}
            });
          }

</script>
</body>

</html> 
