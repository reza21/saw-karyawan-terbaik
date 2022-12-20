<?php

namespace App\Controllers;

use App\Models\Kriteria_model;

class Kriteria extends BaseController
{
    public function index()
    {
        $model = new Kriteria_model();
        $data['title']     = 'Data Kriteria';
        $data['getKriteria'] = $model->getKriteria();
        return view('pages/kriteria/index', $data);
    }

    public function add()
    {
        return view('pages/kriteria/add');
    }

    public function save(){
        $model = new Kriteria_model();
        $data = array(
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'tipe'         => $this->request->getPost('radioTipe')
        );
        $model->saveKriteria($data);
        echo '<script>
                alert("Kriteria berhasil ditambahkan");
                window.location="'.base_url('kriteria').'"
            </script>';
    }

    public function edit($id)
    {
        $model = new Kriteria_model();
        $getKriteria = $model->getKriteria($id)->getRow();
        if(isset($getKriteria))
        {
            $data['kriteria'] = $getKriteria;
            $data['title']  = 'Edit '.$getKriteria->nama_kriteria;

            return view('pages/kriteria/edit', $data);

        }else{

            echo '<script>
                    alert("ID kriteria '.$id.' Tidak ditemukan");
                    window.location="'.base_url('kriteria').'"
                </script>';
        }
    }

    public function update(){
        $model = new Kriteria_model();
        $id = $this->request->getPost('id_kriteria');
        $data = array(
            'nama_kriteria' => $this->request->getPost('nama_kriteria'),
            'tipe'         => $this->request->getPost('radioTipe')
        );
        $model->editKriteria($data,$id);
        echo '<script>
                alert("Kriteria berhasil diperbaharui");
                window.location="'.base_url('kriteria').'"
            </script>';
    }

    public function delete($id)
    {
        $model = new Kriteria_model;
        $getKriteria = $model->getKriteria($id)->getRow();
        if(isset($getKriteria))
        {
            $model->deleteKriteria($id);
            echo '<script>
                    alert("Hapus Data Kriteria Sukses");
                    window.location="'.base_url('kriteria').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID Kriteria '.$id.' Tidak ditemukan");
                    window.location="'.base_url('kriteria').'"
                </script>';
        }
    }
    
}
