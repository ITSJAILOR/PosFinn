<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Persediaan</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <!--Script animation side bar-->
  <script src="SideScript.js"></script>
</head>
  <body>
  <div class="main">
      
  
    <div class="konten">
      <span class="sidebutton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
      <input type="text" onchange="cari()" id="CariBarang">
      <div id="read"></div>
    </div>
    
    <div id="mySidenav" class="sidenav" style="left: 0;"></div>
    </div>

</body>
<script>
        $(document).ready(function () {
            read()
        })
        //Read Database
        function read() {
                $.get("{{url('/barang/read')}}",function (data, status) {          
                    $("#read").html(data);
                });
        }
        const cari = () => {
          var CariData =$("#CariBarang").val();  
          
          $.ajax({
            type : "get",
            url  : "{{ url('barang/cari')}}",
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
</script>
</html>

