<?php 
include('crudjenis.php');
$lib = new Crudjenis();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data= $lib->get_by_id($id);
}
else{
    header('Location: index.php');
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama_jenis = $_POST['nama_jenis'];
    $keterangan = $_POST['keterangan'];

    $status_update = $lib->update($id, $nama_jenis, $keterangan);
    if($status_update)
    {
    header('Location: index.php');
    }
}
   
?>

<html>
    <head>
        <title>Edit Data Jenis</title>
    </head>
    <body>
                <h3>Edit Jenis</h3>
       
            <form method="post" action="">
                <div>
                    <label>ID</label> 
                    <input type="text" name="id" value="<?php echo $data['id'];?>" readonly/>
                </div>

                <div>
                    <label>Nama Jenis</label>
                    <input type="text" name="nama_jenis" id="nama_jenis" value="<?php echo $data['nama_jenis']; ?>">
               
                </div>

                <div >
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" value="<?php echo $data['keterangan']; ?>">
    
                </div>
    
                <div>
                    <input type="submit" name="update" value="Update">
                </div>

                <div >
                    <a href="index.php"><input type="button" value="Back"></a>
                    </div>
                </div>
            </form>
            
    
    </body>
</html>