<?php

namespace App\Models;

use App\Core\Model;

class Golongan extends Model
{

      public function all()
      {
            $sql = "SELECT * FROM tb_golongan";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $data = [];
            while ($rows = $stmt->fetch()) {
                  $data[] = $rows;
            }

            return $data;
      }

      public function store()
      {
            if (isset($_POST['btn_simpan'])) {

                  $kode = $_POST['gol_kode'];
                  $nama = $_POST['gol_nama'];

                  $sql = "INSERT INTO tb_golongan SET gol_kode=:gol_kode, gol_nama=:gol_nama";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(":gol_kode", $kode);
                  $stmt->bindParam(":gol_nama", $nama);
                  $stmt->execute();
            }
      }

      public function edit($id)
      {
            $sql = "SELECT * FROM tb_golongan WHERE gol_id=:gol_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":gol_id", $id);
            $stmt->execute();

            $data = $stmt->fetch();

            return $data;
      }

      public function update()
      {
            if (isset($_POST['btn_update'])) {

                  $id = $_POST['gol_id'];
                  $kode = $_POST['gol_kode'];
                  $nama = $_POST['gol_nama'];
                  $update_at = date('Y-m-d H:i:s');

                  $sql = "UPDATE tb_golongan 
                  SET gol_kode=:gol_kode, 
                  gol_nama=:gol_nama, 
                  update_at=:update_at WHERE gol_id=:gol_id";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(":gol_kode", $kode);
                  $stmt->bindParam(":gol_nama", $nama);
                  $stmt->bindParam(":gol_id", $id);
                  $stmt->bindParam(":update_at", $update_at);
                  $stmt->execute();
            }
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_golongan WHERE gol_id=:gol_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":gol_id", $id);
            $stmt->execute();
      }
}
