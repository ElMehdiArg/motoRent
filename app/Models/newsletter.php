<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $email
 */
class newsletter extends Model
{
    /**
     * @var array
     */
    public $timestamps = false;
    
    protected $fillable = ['email'];

    
}
