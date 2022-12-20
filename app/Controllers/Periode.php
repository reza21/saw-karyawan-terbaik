<?php

namespace App\Controllers;

use App\Models\Periode_model;

class Periode extends BaseController
{
    public function index()
    {
        $model = new Periode_model();
        $data['title']     = 'Data Periode';
        $data['getPeriode'] = $model->getPeriode();
        return view('pages/periode/index', $data);
    }

    public function add()
    {
        return view('pages/periode/add');
    }

    public function save(){
        $model = new Periode_model();
        $data = array(
            'tahun' => $this->request->getPost('tahun'),
        );
        $model->savePeriode($data);
        echo '<script>
                alert("Periode berhasil ditambahkan");
                window.location="'.base_url('periode').'"
            </script>';
    }

    public function edit($id)
    {
        $model = new Periode_model();
        $getPeriode = $model->getPeriode($id)->getRow();
        if(isset($getPeriode))
        {
            $data['periode'] = $getPeriode;
            $data['title']  = 'Edit Periode - '.$getPeriode->tahun;

            return view('pages/periode/edit', $data);

        }else{

            echo '<script>
                    alert("ID periode '.$id.' Tidak ditemukan");
                    window.location="'.base_url('periode').'"
                </script>';
        }
    }

    public function update(){
        $model = new Periode_model();
        $id = $this->request->getPost('id_periode');
        $data = array(
            'tahun' => $this->request->getPost('tahun'),
        );
        $model->editPeriode($data,$id);
        echo '<script>
                alert("Periode berhasil diperbaharui");
                window.location="'.base_url('periode').'"
            </script>';
    }

    public function delete($id)
    {
        $model = new Periode_model();
        $getPeriode = $model->getPeriode($id)->getRow();
        if(isset($getPeriode))
        {
            $model->deletePeriode($id);
            echo '<script>
                    alert("Hapus Data Periode Sukses");
                    window.location="'.base_url('periode').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID Periode '.$id.' Tidak ditemukan");
                    window.location="'.base_url('periode').'"
                </script>';
        }
    }
    
}
