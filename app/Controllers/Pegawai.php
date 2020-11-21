<?php

namespace App\Controllers;

class Pegawai extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Pegawai',
        ];

        return view('/Pegawai/index', $data);
    }

    //--------------------------------------------------------------------

}
