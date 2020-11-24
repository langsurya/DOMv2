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

    function load()
    {
        $event_data = $this->fullcalendar_model->fetch_all_event();
        foreach ($event_data->result_array() as $row) {
            $data[] = array(
                'id' => $row['id'],
                'agenda' => $row['agenda'],
                'start' => $row['start_event'],
                'end' => $row['end_event']
            );
        }
        echo json_encode($data);
    }

    function insert()
    {
        if ($this->input->post('title')) {
            $data = array(
                'agenda'  => $this->input->post('agenda'),
                'start_event' => $this->input->post('start_event'),
                'end_event' => $this->input->post('end_event')
            );
            $this->KalenderModel->insert_event($data);
        }
    }

    function update()
    {
        if ($this->input->post('id')) {
            $data = array(
                'title'   => $this->input->post('title'),
                'start_event' => $this->input->post('start'),
                'end_event'  => $this->input->post('end')
            );

            $this->fullcalendar_model->update_event($data, $this->input->post('id'));
        }
    }

    function delete_event($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('events');
    }

    //--------------------------------------------------------------------

}
