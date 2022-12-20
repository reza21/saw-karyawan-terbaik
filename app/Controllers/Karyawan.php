<?php

namespace App\Controllers;

use App\Models\Karyawan_model;

class Karyawan extends BaseController
{
    public function index()
    {
        $model = new Karyawan_model();
        $data['title']     = 'Data Karyawan';
        $data['getKaryawan'] = $model->getKaryawan();
        return view('pages/karyawan/index', $data);
    }

    public function add()
    {
        return view('pages/karyawan/add');
    }

    public function save(){
        $model = new Karyawan_model();
        $data = array(
            'nip' => $this->request->getPost('nip'),
            'nama'=> $this->request->getPost('nama'),
            'jns_kel'=> $this->request->getPost('radioJnsKel'),
            'no_hp'=> $this->request->getPost('no_hp'),
            'alamat'=> $this->request->getPost('alamat'),
        );
        $model->saveKaryawan($data);
        echo '<script>
                alert("Karyawan berhasil ditambahkan");
                window.location="'.base_url('karyawan').'"
            </script>';
    }

    public function edit($id)
    {
        $model = new Karyawan_model();
        $getKaryawan = $model->getKaryawan($id)->getRow();
        if(isset($getKaryawan))
        {
            $data['karyawan'] = $getKaryawan;
            $data['title']  = 'Edit Karyawan - '.$getKaryawan->nama;

            return view('pages/karyawan/edit', $data);

        }else{

            echo '<script>
                    alert("ID karyawan '.$id.' Tidak ditemukan");
                    window.location="'.base_url('karyawan').'"
                </script>';
        }
    }

    public function update(){
        $model = new Karyawan_model();
        $id = $this->request->getPost('id_karyawan');
        $data = array(
            'nip' => $this->request->getPost('nip'),
            'nama'=> $this->request->getPost('nama'),
            'jns_kel'=> $this->request->getPost('radioJnsKel'),
            'no_hp'=> $this->request->getPost('no_hp'),
            'alamat'=> $this->request->getPost('alamat'),
        );
        $model->editKaryawan($data,$id);
        echo '<script>
                alert("Karyawan berhasil diperbaharui");
                window.location="'.base_url('karyawan').'"
            </script>';
    }

    public function delete($id)
    {
        $model = new Karyawan_model;
        $getKaryawan = $model->getKaryawan($id)->getRow();
        if(isset($getKaryawan))
        {
            $model->deleteKaryawan($id);
            echo '<script>
                    alert("Hapus Data Karyawan Sukses");
                    window.location="'.base_url('karyawan').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID Karyawan '.$id.' Tidak ditemukan");
                    window.location="'.base_url('karyawan').'"
                </script>';
        }
    }
    
}
