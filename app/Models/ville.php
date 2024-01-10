<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_ville
 * @property string $nom_ville
 * @property Reservation[] $reservations
 * @property Reservation[] $reservations
 */
class ville extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_ville';

    /**
     * @var array
     */
    protected $fillable = ['nom_ville'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function reservations()
    // {
    //     return $this->hasMany('App\Models\Reservation', 'date_debut', 'id_ville');
    // }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function reservations()
    // {
    //     return $this->hasMany('App\Models\Reservation', 'date_fin', 'id_ville');
    // }
}
