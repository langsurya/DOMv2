<?php

namespace App\Models;

use CodeIgniter\Model;

class KalenderModel extends Model
{
    protected $table = 'calendar';
    protected $useTimestamps = true;
    protected $allowedFields = ['agenda', 'start', 'end'];
}
