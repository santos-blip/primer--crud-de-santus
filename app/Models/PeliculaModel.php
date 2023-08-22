<?php

namespace App\Models;

use CodeIgniter\Model;

class PeliculaModel extends Model
{
    
    protected $table            = 'cliente';
    protected $primaryKey       = 'IDcliente';
    protected $allowedFields    =['IDcliente','NombreCliente','ApellidoCliente'];
}
