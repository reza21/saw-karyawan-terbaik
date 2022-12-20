<?php

namespace App\Models;

use CodeIgniter\Model;

class Kriteria_model extends Model
{
  protected $table = 'kriteria';

  public function getKriteria($id = false)
  {
    if ($id === false) {
      return $this->findAll();
    } else {
      return $this->getWhere(['id_kriteria' => $id]);
    }
  }

  public function saveKriteria($data)
  {
    $builder = $this->db->table($this->table);
    return $builder->insert($data);
  }

  public function editKriteria($data, $id)
  {
    $builder = $this->db->table($this->table);
    $builder->where('id_kriteria', $id);
    return $builder->update($data);
  }

  public function deleteKriteria($id)
  {
    $builder = $this->db->table($this->table);
    return $builder->delete(['id_kriteria' => $id]);
  }
}
