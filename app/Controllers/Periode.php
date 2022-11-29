<?php

namespace App\Controllers;

class Periode extends BaseController
{
    public function index()
    {
        return view('pages/periode/index');
    }

    public function add()
    {
        return view('pages/periode/add');
    }

    
}
