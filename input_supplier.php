<?php 
include('crudsupplier.php');
$lib = new Crudsupplier();
if(isset($_POST['tambah'])){
    $id = $_POST['id'];
    $nama_supplier = $_POST['nama_supplier'];
    $notelp = $_POST['notelp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
 
    $add_status = $lib->add_data($id, $nama_supplier, $notelp, $email, $alamat);
    if($add_status){
    header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title>Input Supplier</title>
    </head>
    <body>
    <div >
        <div>
            <div>
                <h3>Tambah Data Supplier</h3>
            </div>
            <div >
            <form method="post" action="">
            <div>
                    <label>ID</label>
                    <div class="col-sm-10">
                    <input type="text" name="id"  id="id">
                    </div>
                </div>
                <div>
                    <label>Nama Supplier</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_supplier"  id="nama_supplier">
                    </div>
                </div>
                <div>
                    <label>No Telepon</label>
                    <div class="col-sm-10">
                    <input type="text" name="notelp" id="notelp">
                    </div>
                </div>
                <div>
                    <label>Email</label>
                    <div class="col-sm-10">
                    <input type="text" name="email"  id="email">
                    </div>
                </div>
                <div>
                    <label>Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" name="alamat" id="alamat">
                    </div>
                </div>
                
                <div >
                    <label></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tambah" value="Tambah">
                    </div>
                </div>

                <div >
                    <label></label>
                    <div class="col-sm-10">
                    <a href="index.php?page=supplier"><input type="button" value="Back"></a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>