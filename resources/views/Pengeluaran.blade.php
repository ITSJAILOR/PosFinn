<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengeluaran</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--Script animation side bar-->
    <script src="SideScript.js"></script></head>
</head>
<body>
    <div id="mySidenav" class="sidenav" style="left: 0;"></div>
     
<div class="konten transaksi">
    <span class="sidebutton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>    
    <p></p>
    <span>No invoice</span><input type="id">
    <span>No Supplier</span><input type="text">
    <table>
        <tr>
        <th>Kode Item</th>
        <th>Jumlah Item</th>
        <th>Harga Beli</th>
        <th></th>
        </tr>
        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="button" value="Tambah"></td>
        </tr>
    </table> 
</div>
<div id="mySidenav2" class="sidenav right">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h2>Riwayat Pembelian</h2>
  <table>
    <tr>
      <th>No Faktur</th>
      <th>Supplier</th>
      <th>Jumlah</th>
    </tr>
  </table>
</div>
</body>
</html>