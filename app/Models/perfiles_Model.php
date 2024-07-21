<?php

namespace App\Models;

use CodeIgniter\Model;

class perfiles_Model extends Model
{
    protected $table = 'perfiles';
    protected $primaryKey = 'id_perfiles';
    protected $allwedFields = ['descripcion', 'created_at'];
}
