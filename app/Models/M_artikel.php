<?php

namespace App\Models;

use CodeIgniter\Model;

class M_artikel extends Model
{
    protected $table = "artike";
    protected $primaryKey           = 'id';
    protected $allowedFields        = ['judul','isi','slug'];
   
}