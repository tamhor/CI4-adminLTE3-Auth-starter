<?php

namespace App\Models;

use CodeIgniter\Model;

class ResetpassModel extends Model
{
    protected $table = 'auth_reset_password';
    protected $allowedFields = [
        'user_id',
        'token',
        'created_at'
    ];
}
