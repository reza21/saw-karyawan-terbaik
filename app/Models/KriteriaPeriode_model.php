<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaPeriode_model extends Model
{
  protected $table = 'kriteria_periode';

  public function getKriteriaPeriode($id = false)
  {
    if ($id === false) {
      return $this->findAll();
    } else {
      return $this->getWhere(['id_kriteria_periode' => $id]);
    }
  }

  public function saveKriteriaPeriode($data)
  {
    $builder = $this->db->table($this->table);
    return $builder->insert($data);
  }

  public function cekKriteriaPeriode($id_kriteria, $id_periode)
  {
    $builder = $this->db->table($this->table);
    $builder->where('id_kriteria', $id_kriteria);
    $builder->where('id_periode', $id_periode);
    return $builder;
  }

  public function updateKriteriaPeriode($data, $id_kriteria, $id_periode){
    $builder = $this->db->table($this->table);
    $builder->where('id_kriteria', $id_kriteria);
    $builder->where('id_periode', $id_periode);
    return $builder->update($data);
  }
}
