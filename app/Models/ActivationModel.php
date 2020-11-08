<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivationModel extends Model
{
    protected $table = 'auth_activations';
    protected $allowedFields = [
        'user_id',
        'token',
        'created_at'
    ];
}
