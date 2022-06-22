<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{

      public function all()
      {
            $sql = "SELECT * FROM tb_pelanggan";
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

                  $nama = $_POST['pel_nama'];
                  $alamat = $_POST['pel_alamat'];
                  $hp = $_POST['pel_hp'];
                  $nik = $_POST['pel_ktp'];

                  $sql = "INSERT INTO tb_pelanggan SET pel_nama=:pel_nama, pel_alamat=:pel_alamat,
                  pel_hp=:pel_hp, pel_ktp=:pel_ktp";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(":pel_nama", $nama);
                  $stmt->bindParam(":pel_alamat", $alamat);
                  $stmt->bindParam(":pel_hp", $hp);
                  $stmt->bindParam(":pel_ktp", $nik);
                  $stmt->execute();
            }
      }

      public function edit($id)
      {
            $sql = "SELECT * FROM tb_pelanggan WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id", $id);
            $stmt->execute();

            $data = $stmt->fetch();

            return $data;
      }

      public function update()
      {
            if (isset($_POST['btn_update'])) {

                  $id = $_POST['pel_id'];
                  $nama = $_POST['pel_nama'];
                  $alamat = $_POST['pel_alamat'];
                  $hp = $_POST['pel_hp'];
                  $nik = $_POST['pel_ktp'];
                  $update_at = date('Y-m-d H:i:s');

                  $sql = "UPDATE tb_pelanggan
                  SET pel_nama=:pel_nama, pel_alamat=:pel_alamat,
                  pel_hp=:pel_hp, 
                  pel_ktp=:pel_ktp, 
                  update_at=:update_at WHERE pel_id=:pel_id";
                  $stmt = $this->db->prepare($sql);
                  $stmt->bindParam(":pel_nama", $nama);
                  $stmt->bindParam(":pel_alamat", $alamat);
                  $stmt->bindParam(":pel_hp", $hp);
                  $stmt->bindParam(":pel_ktp", $nik);
                  $stmt->bindParam(":pel_id", $id);
                  $stmt->bindParam(":update_at", $update_at);
                  $stmt->execute();
            }
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id", $id);
            $stmt->execute();
      }
}
