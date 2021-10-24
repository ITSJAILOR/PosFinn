<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dasboard</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <!--Script animation side bar-->
  <script src="SideScript.js"></script></head>
  <body>
  
  <div class="main">
    <div class="konten HalfLook">
    <span class="sidebutton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <button class="Orderbutton" style="bottom: 5px; position: fixed; width: 100%; left: 0;" onclick="openChart()">Order</button>
    </div>
    
    <div id="mySidenav" class="sidenav" style="left: 0;"></div>  

    <div id="mySidenav2" class="HalfSide Half" >        
      <a href="javascript:void(0)" class="closebtn" style="color: #6F73D2 !important;" onclick="closeNav()">&times;</a>
      
      </div>

  </div>
</body>
</html>