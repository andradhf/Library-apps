<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.2.3-dist/css/bootstrap.css') }}">
     <script src="{{ asset('/css/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('/js/jquery-3.7.0.min.js') }}"></script>
     <script type="text/javascript"> 
    
        function lihatpustaka(){
                          $.ajax({
                          type:"GET",
                          url:"/table"
                          }).done(function(data){
                          $('#tabel').html(data);
                          });
                          }
        
        function caripustaka(){
            var idbuku = document.getElementById("idbuku").value;
            $.ajax({
                          type:"GET",
                          url:"/cari/"+idbuku
                          }).done(function(data){
                          $('#tabel').html(data);
                          alert("Data ditemukan!");
                          });
                       }
        
        
        
        
        </script>
    <title>Document</title>
</head>
<body onload="lihatpustaka();">
    <h1 class="container-fluid p-5 bg-dark text-white" style="text-align:center">Perpustakaan Madani <h1>
<h3>Data Perpustakaan</h3>



<br/>
<label for="idbuku">Masukkan id buku yang ingin dicari</label>
<table>
    <tr>    
<td><input type="text" id="idbuku" class="form-control form-control" style="width: 300px;"></td>
<td><button type="button" id="cari" class="btn btn-success btn" style="width:100px;" onclick="caripustaka();">Search</button></td>
<td><button type="button" id="lihat" class="btn btn-danger btn" style="width:125px;" onclick="lihatpustaka();">Lihat Semua</button></td>    
    </tr>
</table>
<br/>

<button type="button" id="isi" class="btn btn-info btn" data-bs-toggle="modal" data-bs-target="#ModalInsert">Pendaftaran Buku Baru</button>
<p></p>
<div id="tabel">

</div>

</body>
</html>