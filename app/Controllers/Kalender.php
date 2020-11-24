<?php

namespace App\Controllers;

class Kalender extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Kalender',
        ];
        return view('/kalender/index', $data);
    }

    //--------------------------------------------------------------------

}
