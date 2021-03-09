<!DOCTYPE html>
<html lang="id-ID">
<head>
    <title>www.bankmantap.co.id</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=”description” content="description">
    <link rel="shortcut icon" type="image/png" href="asset/logo_mantap.png" sizes="16x16">
    <!-- CSS Bootsrap ver.4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all"/>

    <style>
      * {
        box-sizing: border-box;
      }
      
      .overlay {
        height: 25%;
        width: 100%;
        display: none;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(255, 255, 255);
        background-color: rgba(255, 255, 255, 0.9);
      }
      
      .overlay-content {
        position: relative;
        top: 40%;
        width: 80%;
        text-align: center;
        margin-top: 30px;
        margin: auto;
      }
      
      .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 50px;
        cursor: pointer;
        color: rgb(15, 8, 67);
      }
      
      .overlay .closebtn:hover {
        color: #ccc;
      }
      
      .overlay input[type=text] {
        padding: 15px;
        font-size: 17px;
        border: none;
        float: left;
        width: 80%;
        background: white;
      }
      
      .overlay input[type=text]:hover {
        background: #f1f1f1;
      }
      
      .overlay button {
        float: left;
        width: 10%;
        padding: 5px;
        background: rgb(8, 7, 73);
        border: none;
        cursor: pointer;
        color:white;
      }
      
      .overlay button:hover {
        background: #bbb;
      }
      </style>
</head>



<!-- ====================================================== NAVBAR MENU ===================================================== -->
<header>
<nav class="navbar navbar-expand-lg p-3 fixed-top navbar-light bg-white border-bottom">
 
<a class="navbar-brand ml-4 mr-5" href="#"><img src="asset/logo_mantap.png"  alt="Logo" width="80%"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" style="margin-left:10%;" id="navbarSupportedContent">

    <ul class="navbar-nav" style="font-size:12px; font-weight: bold;">
    <li class="nav-item active" >
    <a class="nav-link mr-3" href="index.php">BERANDA <span class="sr-only">(current)</span></a>
    </li>
         
    <li class="nav-item dropdown">
    <a class="nav-link mr-3 dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TENTANG KAMI</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="sekilasperusahaan.php">Sekilas Perusahaan</a>
      <a class="dropdown-item" href="strukturorganisasi.php">Struktur Organisasi</a>
      <a class="dropdown-item" href="budayakerja.php">Budaya Kerja</a>
      <a class="dropdown-item" href="manajemen.php">Manajemen</a>
      <a class="dropdown-item" href="pemegangsaham.php">Pemegang Saham</a>
      <a class="dropdown-item" href="penghargaan.php">Penghargaan</a>
      <a class="dropdown-item" href="#">Good Corporate Goverment</a>
      <a class="dropdown-item" href="#">Whistleblowing System</a>
      <a class="dropdown-item" href="#">Pengungkapan Kuantitatif Eksposur Risiko</a>
    </div>
    </li> 

    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">PINJAMAN</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">SIMPANAN</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">INFO MANTAP</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">JASA BANK</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">CABANG</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="#" tabindex="-1" aria-disabled="true">SIMULASI</a></li>        
    </ul>

    <!-- Search Bottom Here -->
    <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
      <div class="overlay-content">
        <form action="/hasil.php">
          <input type="text" placeholder="Search.." name="search">
          <button class="btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    
    <a class="text-muted" href="#" onclick="openSearch()">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
    <circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
    </a> 
    <!-- End Bottom Here -->

    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-sm btn-warning">
    <input type="radio" name="options" id="option1" autocomplete="off" checked>IDN
    </label>
    <label class="btn btn-sm btn-outline-warning text-dark">
    <input type="radio" name="options" id="option2" autocomplete="off">ENG
    </label>
    </div>

</div>
 
</nav>
</header>
<!-- ====================================================== /NAVBAR  ===================================================== -->