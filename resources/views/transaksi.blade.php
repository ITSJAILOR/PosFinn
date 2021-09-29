<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<!--Script animation side bar-->
<script src="SideScript.js"></script></head>
<body>
<div id="mySidenav" class="sidenav" style="left: 0;"></div>

<div class="konten transaksi">
  <span class="sidebutton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <input type="text" placeholder="Cari Barang">
  <h2>Menu</h2>  
  <button class="MenuButton">Menu</button>
  <button class="MenuButton">Menu</button>
  <button class="MenuButton">Menu</button>
  <button class="MenuButton">Menu</button>
  <button class="MenuButton">Menu</button>
  <button class="Orderbutton" style="bottom: 5px; position: fixed;" onclick="openChart()">Order</button>
</div>

<div id="mySidenav2" class="sidenav right">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
   
</body>
</html> 
