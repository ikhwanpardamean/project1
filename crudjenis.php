<?php
class Crudjenis
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "yii2basic";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_data($id, $nama_jenis, $keterangan)
    {
        $data = $this->db->prepare('INSERT INTO jenis (id,nama_jenis,keterangan) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $id);
        $data->bindParam(2, $nama_jenis);
        $data->bindParam(3, $keterangan);
 
        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM jenis");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
 
    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM jenis where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($id, $nama_jenis, $keterangan){
        $query = $this->db->prepare('UPDATE jenis set nama_jenis=?,keterangan=? where id=?');
        
        $query->bindParam(1, $nama_jenis);
        $query->bindParam(2, $keterangan);
        $query->bindParam(3, $id);
 
        $query->execute();
        return $query->rowCount();
    }
 
    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM jenis where id=?");
 
        $query->bindParam(1, $id);
 
        $query->execute();
        return $query->rowCount();
    }
 
}
?>