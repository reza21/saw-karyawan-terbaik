<?php

namespace App\Models;

use CodeIgniter\Model;

class Karyawan_model extends Model
{
  protected $table = 'karyawan';

  public function getKaryawan($id = false)
  {
    if ($id === false) {
      return $this->findAll();
    } else {
      return $this->getWhere(['id_karyawan' => $id]);
    }
  }

  public function saveKaryawan($data)
  {
    $builder = $this->db->table($this->table);
    return $builder->insert($data);
  }

  public function editKaryawan($data, $id)
  {
    $builder = $this->db->table($this->table);
    $builder->where('id_karyawan', $id);
    return $builder->update($data);
  }

  public function deleteKaryawan($id)
  {
    $builder = $this->db->table($this->table);
    return $builder->delete(['id_karyawan' => $id]);
  }
}
