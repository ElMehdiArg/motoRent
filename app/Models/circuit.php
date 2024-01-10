<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_circ
 * @property string $titre
 * @property string $image
 * @property string $description
 * @property CircuitImage[] $circuitImages
 */
class circuit extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_circ';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['titre', 'circuit_image', 'description','détail'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function circuitImages()
    {
        return $this->hasMany('App\Models\CircuitImage', 'id_circ', 'id_circ');
    }
}
