<?php 
include('crudsupplier.php');
$lib = new Crudsupplier();
$data_supplier = $lib->show();
 
if(isset($_GET['hapus_supplier']))
{
    $id = $_GET['hapus_supplier'];
    $status_hapus = $lib->delete($id);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>



<html>

  <head>
    <h2>Data Supplier</h2>
  </head>
  <body>

  <a href='index.php?page=input_supplier' class='btn btn-primary'><span data-feather="plus-circle"></span>
Input Supplier</a>

    <table class='table table-bordered mt-3'>
<tr>
<th>No</th>
<th>ID</th>
<th>Nama Supplier</th>
<th>No Telepon</th>
<th>Email</th>
<th>Alamat</th>
<th>Aksi</th>
</tr>
<?php 
                    $no = 1;
                    foreach($data_supplier as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['nama_supplier']."</td>";
						echo "<td>".$row['notelp']."</td>";
						echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        echo "<td><a class='btn btn-info' href='index.php?page=edit_supplier".$row['id']."'>Edit</a>
                        <a class='btn btn-danger' href='supplier.php?hapus_supplier=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
</table>



  </body>
</html>