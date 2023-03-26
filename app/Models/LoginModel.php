<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LoginModel
 * 
 * @property string $username
 * @property string $password
 *
 * @package App\Models
 */
class LoginModel extends Model
{
    protected $fillable = [
        'username',
        'password'
    ];
}
