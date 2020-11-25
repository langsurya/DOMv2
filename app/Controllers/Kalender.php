<?php

namespace App\Controllers;

use \App\Models\KalenderModel;

class Kalender extends BaseController
{
    protected $KalenderModel;
    public function __construct()
    {

        $this->KalenderModel = new KalenderModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | Kalender',
        ];
        return view('/kalender/index', $data);
    }

    function save()
    {
        // dd($this->request->getVar());
        $this->KalenderModel->save([
            'agenda' => $this->request->getVar('title'),
            'start' => $this->request->getVar('start'),
            'end' => $this->request->getVar('end'),
        ]);
    }

    //--------------------------------------------------------------------

}
