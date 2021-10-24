<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<button class="NavButton" onclick="window.location.href='/'">Dashboard</button>
<!--button class="NavButton" onclick="window.location.href='/Pembukuan'" >Pembukuan</button-->
<button class="active" onclick="window.location.href='/transaksi'">Orders</button>
<button class="NavButton" onclick="window.location.href='/persediaan'">Inventory</button>
<button class="NavButton" onclick="window.location.href='/pembelian'">Pembelian</button>
<!--button class="NavButton" onclick="window.location.href='/Aset'">Aset Tetap</button-->
<button class="NavButton" onclick="window.location.href='/supplier'">Supplier</button>
<!-- <button class="NavButton" onclick="window.location.href='/Pelanggan'">Custommer</button> -->
<button style="width: 100%;" onclick="window.location.href='/login'" >Logout</button>
</body>
</html>