<?php

namespace App\Controllers;

use App\Models\Kriteria_model;
use App\Models\KriteriaPeriode_model;
use App\Models\Periode_model;

class KriteriaPeriode extends BaseController
{
    public function index()
    {
        if(empty($this->request->getPost('id_periode'))){
            $model = new Periode_model();
            $data['getPeriode'] = $model->getPeriode();

            $modelKriteria = new Kriteria_model();
            $data['getKriteria'] = $modelKriteria->getKriteria();
            return view('pages/kriteria_periode/index', $data);
        }else{
            $model = new Periode_model();
            $data['getPeriode'] = $model->getPeriode();
            $data['getPeriodeTerpilih'] = $model->getPeriode($this->request->getPost('id_periode'))->getRow();
            $data['getModelKriteriaPeriode'] = new KriteriaPeriode_model();

            $modelKriteria = new Kriteria_model();
            $data['getKriteria'] = $modelKriteria->getKriteria();
            return view('pages/kriteria_periode/index', $data);
        }
        
    }

    public function setting($id = null)
    {
        return view('pages/kriteria_periode/setting');
    }

    public function save(){
        $modelKP = new KriteriaPeriode_model();

        $id_periode = $this->request->getPost('id_periode');
        $id_kriteria = $this->request->getPost('id_kriteria');
        $bobot = $this->request->getPost('bobot');

        foreach($id_kriteria as $idx => $data){
            $cekData = $modelKP->cekKriteriaPeriode($id_kriteria, $id_periode)->get()->getRow();
            if(!isset($cekData)){
                $data = array(
                    'id_periode' => $id_periode,
                    'id_kriteria' => $id_kriteria[$idx],
                    'bobot' => $bobot[$idx]
                );
    
                $modelKP->saveKriteriaPeriode($data);
            }else{
                $data = array(
                    'bobot' => $bobot[$idx]
                );
    
                $modelKP->updateKriteriaPeriode($data, $id_kriteria[$idx], $id_periode);
            }
            
        }

        echo '<script>
                alert("Pembobotan Kriteria per Periode Berhasil diset");
                window.location="'.base_url('kriteriaperiode').'"
            </script>';
    }
    
}
