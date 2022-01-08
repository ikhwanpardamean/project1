<?php 
include('crudbarang.php');
$lib = new Crudbarang();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data= $lib->get_by_id($id);
}
else{
    header('Location: index.php');
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $satuan = $_POST['satuan'];
    $id_jenis = $_POST['id_jenis'];
    $id_supplier = $_POST['id_supplier'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $status_update = $lib->update($id, $kode_barang, $nama_barang, $satuan, $id_jenis, $id_supplier, $harga, $stok);
    if($status_update)
    {
    header('Location: index.php');
    }
}
   
?>

<html>
    <head>
        <title>Edit Data Barang</title>
    </head>
    <body>
                <h3>Edit Barang</h3>
       
            <form method="post" action="">
                <div>
                    <label>ID</label> 
                    <input type="text" name="id" value="<?php echo $data['id'];?>" readonly/>
                </div>

                <div>
                    <label>Kode Barang</label>
                    <input type="text" name="kode_barang" id="kode_barang" value="<?php echo $data['kode_barang']; ?>">
               
                </div>

                <div >
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" id="nama_barang" value="<?php echo $data['nama_barang']; ?>">
    
                </div>

                <div>
                    <label>Satuan</label>    
                    <input type="text" name="satuan" id="satuan" value="<?php echo $data['satuan']; ?>">
                </div>

                <div>
                    <label>ID Jenis</label>
                    <input type="text" name="id_jenis" id="id_jenis" value="<?php echo $data['id_jenis']; ?>">
               
                </div>

                <div >
                    <label>ID Supplier</label>
                    <input type="text" name="id_supplier" id="id_supplier" value="<?php echo $data['id_supplier']; ?>">
    
                </div>

                <div>
                    <label>Harga</label>
                    <input type="text" name="harga" id="harga" value="<?php echo $data['harga']; ?>">
               
                </div>

                <div >
                    <label>Stok</label>
                    <input type="text" name="stok" id="stok" value="<?php echo $data['stok']; ?>">
    
                </div>
                <div>
                    <input type="submit" name="update" value="Update">
                </div>

                <div >
                    <a href="index.php?page=barang"><input type="button" value="Back"></a>
                    </div>
                </div>
            </form>
            
    
    </body>
</html>