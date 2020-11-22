<?php

namespace App\Controllers;

class Pegawai extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Data Pegawai',
        ];

        return view('/pegawai/index', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Home | Data Pegawai',
        ];

        return view('/pegawai/detail', $data);
    }

    //--------------------------------------------------------------------

}
