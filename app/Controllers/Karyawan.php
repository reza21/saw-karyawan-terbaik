<?php

namespace App\Controllers;

class Karyawan extends BaseController
{
    public function index()
    {
        return view('pages/karyawan/index');
    }

    public function add()
    {
        return view('pages/karyawan/add');
    }

    
}
