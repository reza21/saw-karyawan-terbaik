<?php

namespace App\Models;

use CodeIgniter\Model;

class Periode_model extends Model
{
  protected $table = 'periode';

  public function getPeriode($id = false)
  {
    if ($id === false) {
      return $this->orderBy('tahun', 'ASC')->findAll();
    } else {
      return $this->getWhere(['id_periode' => $id]);
    }
  }

  public function savePeriode($data)
  {
    $builder = $this->db->table($this->table);
    return $builder->insert($data);
  }

  public function editPeriode($data, $id)
  {
    $builder = $this->db->table($this->table);
    $builder->where('id_periode', $id);
    return $builder->update($data);
  }

  public function deletePeriode($id)
  {
    $builder = $this->db->table($this->table);
    return $builder->delete(['id_periode' => $id]);
  }
}
