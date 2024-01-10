<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_res
 * @property integer $id_moto
 * @property string $date_debut
 * @property string $date_fin
 * @property string $c_first_name
 * @property string $c_last_name
 * @property string $c_phone
 * @property integer $c_age
 * @property string $c_email
 * @property Moto $moto
 */
class reservation extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_res';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['id_moto','number', 'date_debut', 'date_fin', 'c_first_name', 'c_last_name', 'c_phone', 'c_age', 'c_email'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function moto()
    {
        return $this->belongsTo('App\Models\Moto', 'id_moto', 'id_moto');
    }
}
