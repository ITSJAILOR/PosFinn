<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Besar</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--Script animation side bar-->
    <script src="SideScript.js"></script></head>
</head> <script src="https://unpkg.com/feather-icons"></script>
<body>


    <div id="mySidenav" class="sidenav" style="left: 0;"></div>
    <div class="BBesar">
        <span class="sidebutton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
          <!-- example icon -->
  
        <button class="MenuButton" onclick="window.location.href='/Pembukuan/Akun'"> <i data-feather="book"></i>  Daftar Akun</button>
        <button class="MenuButton">Laporan Keuangan</button>
        <button class="MenuButton">Jurnal Umum</button>
        <button class="MenuButton">Company Profile</button>
    </div>
</body>
</html>

<script>
  feather.replace()
</script>