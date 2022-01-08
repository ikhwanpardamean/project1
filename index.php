<html>
<!--<!doctype html>
<html lang="en">-->
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
	  <script type="text/javascript" src="js/bootstrap.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>Toko CRUD</title>
  </head>
  <body>

  

  <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">-->
  <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand">Project 1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=barang">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=jenis">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=supplier">Supplier</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  </nav>

  <div class="container-fluid">

  <div class="row">
    <div class="col-md-2">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=barang">
              <span data-feather="arrow-left"></span>
              Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=jenis">
              <span data-feather="arrow-left"></span>
              Jenis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=supplier">
              <span data-feather="shopping-cart"></span>
              Supplier
            </a>
          </li>
         
        </ul>

      </div>
    </nav>
    </div>
    <div class="col-md-9 ">
    <?php 

if(isset($_GET['page'])){
  $page = $_GET['page'];

  switch ($page) {
    case 'barang':
      include "barang.php";
      break;
    case 'jenis':
      include "jenis.php";
      break;
    case 'supplier':
      include "supplier.php";
      break;
    case 'input_supplier':
      include "input_supplier.php";
      break;
    case 'input_jenis':
      include "input_jenis.php";
      break;
    case 'input_barang':
      include "input_barang.php";
      break;
    case 'edit_barang':
      include "edit_barang.php";
      break;		
    default:
      echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
      break;
  }
}
	 ?>
    
    </div>
  </div>
</div>


  
  </body>
</html>