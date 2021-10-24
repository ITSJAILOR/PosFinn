<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Besar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--Script animation side bar-->
    <link rel="stylesheet" href="/../style.css">
    <script src="/../SideScript.js"></script></head>
  <body>
  <div id="mySidenav" class="sidenav" style="left: 0;"></div>
  
  <div class="BBesar">
    <span class="sidebutton" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <button onclick="tambah()">Tambah</button>
    <div class="modal" id="exampleModal" tabindex="-1">
        <div class="modal-dialog" >
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <select name="cars" id="KatAkun" onchange="gunakan()" placeholder="Kategori Akun">
                    <option value="">Pilih Kategori Akun</option>
                    <option value="1">ASET</option>
                    <option value="2">KEWAJIBAN</option>
                    <option value="3">MODAL</option>
                    <option value="4">PENDAPATAN</option>
                    <option value="5">BEBAN</option>
                </select>
                <input type="text" name="" id="indukakun">
                <input type="text" name="" id=""placeholder="No Akun">
                <input type="text" name="" id=""placeholder="Nama Akun">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
    </div>

  </div>
</body>
<script>
    $(document).ready(function(){
        
    })
    function tambah() {
        $("#exampleModal").modal('show');
    }
    function gunakan(){
        var katakun = document.getElementById("KatAkun");
        var value = katakun.options[katakun.selectedIndex].value;
        document.getElementById("indukakun").value = value;
    }
</script>
</html>