<?php

namespace App\Models;

use CodeIgniter\Model;

class FansModel extends Model
{
    protected $table            = 'fans';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'nome',
        'documento',
        'cep',
        'endereco',
        'bairro',
        'cidade',
        'uf',
        'telefone',
        'email',
        'ativo',
        'updated_at',
    ];

    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
