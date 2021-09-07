<?php

namespace App\Models;

use CodeIgniter\Model;

class MyModel extends Model
{
    protected $table      = 'statistic';
    protected $allowedFields = ['ip', 'action'];
}