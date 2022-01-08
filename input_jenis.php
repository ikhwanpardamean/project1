<?php 
include('crudjenis.php');
$lib = new Crudjenis();
if(isset($_POST['tambah'])){
    $id = $_POST['id'];
    $nama_jenis = $_POST['nama_jenis'];
    $keterangan = $_POST['keterangan'];
 
    $add_status = $lib->add_data($id, $nama_jenis, $keterangan);
    if($add_status){
    header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title>Input Jenis</title>
    </head>
    <body>
    <div >
        <div>
            <div>
                <h3>Tambah Jenis</h3>
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
                    <label>Nama Jenis</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama_jenis"  id="nama_jenis">
                    </div>
                </div>
                <div>
                    <label>Keterangan</label>
                    <div class="col-sm-10">
                    <input type="text" name="keterangan" id="keterangan">
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
                    <a href="index.php?page=jenis"><input type="button" value="Back"></a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>