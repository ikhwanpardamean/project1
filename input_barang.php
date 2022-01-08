<?php 
include('crudbarang.php');
$lib = new Crudbarang();
if(isset($_POST['tambah'])){
    $id = $_POST['id'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $satuan = $_POST['satuan'];
    $id_jenis = $_POST['id_jenis'];
    $id_supplier = $_POST['id_supplier'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
 
    $add_status = $lib->add_data($id, $kode_barang, $nama_barang, $satuan, $id_jenis, $id_supplier, $harga, $stok);
    if($add_status){
    header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title>Input Barang</title>
    </head>
    <body>
    <div >
        <div>
            <div>
                <h3>Tambah Data Barang</h3>
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
                    <label>Kode Barang</label>
                    <div class="col-sm-10">
                    <input type="text" name="kode_barang"  id="kode_barang">
                    </div>
                </div>
                <div>
                    <label>Nama Barang</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_barang" id="nama_barang">
                    </div>
                </div>
                <div>
                    <label>Satuan</label>
                    <div class="col-sm-10">
                    <input type="text" name="satuan"  id="satuan">
                    </div>
                </div>
                <div>
                    <label>ID Jenis</label>
                    <div class="col-sm-10">
                    <input type="text" name="id_jenis" id="id_jenis">
                    </div>
                </div>
                <div>
                    <label>ID Supplier</label>
                    <div class="col-sm-10">
                    <input type="text" name="id_supplier"  id="id_supplier">
                    </div>
                </div>
                <div>
                    <label>Harga</label>
                    <div class="col-sm-10">
                    <input type="text" name="harga" id="harga">
                    </div>
                </div>
                <div>
                    <label>Stok</label>
                    <div class="col-sm-10">
                    <input type="text" name="stok" id="stok">
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
                    <a href="index.php?page=barang"><input type="button" value="Back"></a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>