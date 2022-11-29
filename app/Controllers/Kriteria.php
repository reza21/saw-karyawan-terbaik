<?php

namespace App\Controllers;

class Kriteria extends BaseController
{
    public function index()
    {
        return view('pages/kriteria/index');
    }

    public function add()
    {
        return view('pages/kriteria/add');
    }

    
}
