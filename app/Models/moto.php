<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moto extends Model
{
    use HasFactory;

    protected $table = 'motos';

    protected $primaryKey = 'id_moto';

    public $timestamps = false;


    public function Categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
