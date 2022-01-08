<?php 
include('crudbarang.php');
$lib = new Crudbarang();
$data_barang = $lib->show();
 
if(isset($_GET['hapus_barang']))
{
    $id = $_GET['hapus_barang'];
    $status_hapus = $lib->delete($id);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>

<html>

<head>
	<h2>Data Barang</h2>
</head>

<body>
    <a href='index.php?page=input_barang' class='btn btn-primary'><span data-feather="plus-circle"></span>
Input Barang</a>

    <table class='table table-bordered mt-3'>
<tr>
<th>No</th>
<th>ID</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Satuan</th>
<th>ID Jenis</th>
<th>ID Supplier</th>
<th>Harga</th>
<th>Stok</th>
<th>Aksi</th>
</tr>
<?php 
                    $no = 1;
                    foreach($data_barang as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['kode_barang']."</td>";
                        echo "<td>".$row['nama_barang']."</td>";
                        echo "<td>".$row['satuan']."</td>";
                        echo "<td>".$row['id_jenis']."</td>";
                        echo "<td>".$row['id_supplier']."</td>";
                        echo "<td>".$row['harga']."</td>";
                        echo "<td>".$row['stok']."</td>";
                        echo "<td><a class='btn btn-info' href='index.php?page=edit_barang.$row[id]'>Edit</a>
                        <a class='btn btn-danger' href='barang.php?hapus_barang=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
</table>



</body>
</html>

