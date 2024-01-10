<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property integer $user_id
 * @property string $name
 * @property string $email
 * @property string $password
 */
class User extends Authenticatable
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];
}
