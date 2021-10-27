<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!--Script animation side bar-->
    <script src="SideScript.js"></script></head>
    <body>
      <div class="main">
        <div class="konten HalfLook">
          <span class="sidebutton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
          <div id="rincian"></div>
          <button class="Orderbutton" style="bottom: 5px; position: fixed; width: 100%; left: 0;" onclick="openChart()">Daftar Supplier</button>
        </div>
        
        <div id="mySidenav" class="sidenav" style="left: 0;"></div>
        
        <div id="mySidenav2" class="HalfSide Half" >
          <input type="text" placeholder="Cari Data" onchange="cari()" id="CariSupplier">
    <div id="read"></div>
    <a href="javascript:void(0)" class="closebtn" style="color: #6F73D2 !important;" onclick="closeNav()">&times;</a>
  </div>
</div>   
<script> 
 $(document).ready(function () {
   read();
   rincian();
  })
  
  
  function rincian(id){
        $.get("{{url('/supplier/read')}}/" + id, function (data, status){
          $("#rincian").html(data);
        });
      }
  
      function read(){
        $.get("{{url('/supplier/read')}}", function (data, status){
          $("#read").html(data);
        });
      }
      
   
      
      function cari(){
      var CariData =$("#CariSupplier").val();  
  
      $.ajax({
        type : "get",
        url  : "{{ url('supplier/cari')}}",
        data: {CariData},
        success:function(data){
          console.log("sukses");
          $("#read").html(data);
        },
        error: function(data){
          console.log("error", status.responseText);
        }
      });
      } 
  
      function store(){
        var KdSupplier =$("#KdSupplier").val();
        var NmSupplier =$("#NmSupplier").val();
        var AlSupplier =$("#AlSupplier").val();
  
        $.ajax({
          type : "get",
          url  : "{{ url('supplier/store')}}",
          data: {KdSupplier, NmSupplier, AlSupplier},
          success:function(data){
            console.log("sukses");
            rincian(KdSupplier);
            read();
            document.getElementById("KdSupplier").value = "";
            document.getElementById("NmSupplier").value = "";
            document.getElementById("AlSupplier").value = "";
          },
          error: function(data){
            console.log("error", status.responseText);
          }
        });
      }
  
  
      function update(id){
        var KdSupplier =$("#KdSupplier").val();
        var NmSupplier =$("#NmSupplier").val();
        var AlSupplier =$("#AlSupplier").val();
  
        $.ajax({
          type : "get",
          url  : "{{ url('supplier/update')}}" + id,
          data: {KdSupplier, NmSupplier, AlSupplier},
          success:function(data){
            console.log("sukses");
            rincian();
            read();
          },
          error:function(data){
            console.log("error", status.responseText);
          }
        });
      }
  
      function destroy(id){
        var KdSupplier =$("#KdSupplier").val();
        
        $.ajax({
          type : "get",
          url  : "{{ url('supplier/destroy')}}/" + id,
          data: {},
          success:function(data){
            read();
            rincian();
            console.log("sukses");
          },
          error:function(data){
            console.log("error", status.responseText);
          }
        });
      }
  </script>
</body>
</html>
