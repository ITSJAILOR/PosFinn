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
  <input type="text" placeholder="Cari Barang">
  <div id="read"></div>

  <button class="Orderbutton" style="bottom: 5px; position: fixed; width: 100%; left: 0;" onclick="openChart()">Order</button>
  </div>

  <div id="mySidenav" class="sidenav" style="left: 0;"></div>

  <div id="mySidenav2" class="HalfSide OrderSide" >
    
  <a href="javascript:void(0)" class="closebtn" style="color: #6F73D2 !important;" onclick="closeNav()">&times;</a>
  <input type="text" name="" placeholder="Order Pin">
  <input type="text" name="" placeholder="Table">
  <table>
    <tr>
      <th>Menu</th>
      <th>Qty</th>
      <th>Rp</th>
    </tr>
    <tr>
      <th>Caramel latte</th>
      <th>2</th>
      <th>40k</th>
    </tr>
    <tr>
      <th>Caramel latte</th>
      <th>2</th>
      <th>40k</th>
    </tr>
    <tr>
      <th>Caramel latte</th>
      <th>2</th>
      <th>40k</th>
    </tr>
  </table>
  <button style="bottom: 5px; position: fixed; width: 300px;">Order</button>
  </div>
</div>   
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
</script>
</body>

</html> 
