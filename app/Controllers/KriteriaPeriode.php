<?php

namespace App\Controllers;

class KriteriaPeriode extends BaseController
{
    public function index()
    {
        return view('pages/kriteria_periode/index');
    }

    public function setting($id = null)
    {
        return view('pages/kriteria_periode/setting');
    }

    
}
