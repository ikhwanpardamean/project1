<?php 
include('crudjenis.php');
$lib = new Crudjenis();
$data_jenis = $lib->show();
 
if(isset($_GET['hapus_jenis']))
{
    $id = $_GET['hapus_jenis'];
    $status_hapus = $lib->delete($id);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>



<html>

  <head>
    <h2>Data Jenis</h2>
  </head>
  <body>

  <a href='index.php?page=input_jenis' class='btn btn-primary'><span data-feather="plus-circle"></span>
Input Jenis</a>

    <table class='table table-bordered mt-3'>
<tr>
<th>No</th>
<th>ID</th>
<th>Nama Jenis</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>
<?php 
                    $no = 1;
                    foreach($data_jenis as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['nama_jenis']."</td>";
                        echo "<td>".$row['keterangan']."</td>";
                        echo "<td><a class='btn btn-info' href='edit_jenis.php?id=".$row['id']."'>Edit</a>
                        <a class='btn btn-danger' href='jenis.php?hapus_jenis=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
</table>

  </body>
</html>