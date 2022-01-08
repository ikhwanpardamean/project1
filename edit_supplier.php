<?php 
include('crudsupplier.php');
$lib = new Crudsupplier();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data= $lib->get_by_id($id);
}
else{
    header('Location: index.php');
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama_supplier = $_POST['nama_supplier'];
    $notelp = $_POST['notelp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $status_update = $lib->update($id, $nama_supplier, $notelp, $email, $alamat);
    if($status_update)
    {
    header('Location: index.php');
    }
}
   
?>

<html>
    <head>
        <title>Edit Data Supplier</title>
    </head>
    <body>
                <h3>Edit Supplier</h3>
       
            <form method="post" action="">
                <div>
                    <label>ID</label> 
                    <input type="text" name="id" value="<?php echo $data['id'];?>" readonly/>
                </div>

                <div>
                    <label>Nama Supplier</label>
                    <input type="text" name="nama_supplier" id="nama_supplier" value="<?php echo $data['nama_supplier']; ?>">
               
                </div>

                <div >
                    <label>No Telepon</label>
                    <input type="text" name="notelp" id="notelp" value="<?php echo $data['notelp']; ?>">
    
                </div>

                div>
                    <label>Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $data['email']; ?>">
               
                </div>

                <div >
                    <label>Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>">
    
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