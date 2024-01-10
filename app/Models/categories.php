<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_cat
 * @property string $m_catégorie
 * @property Moto[] $motos
 */
class categories extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_cat';

    /**
     * @var array
     */
    protected $fillable = ['m_catégorie'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function motos()
    {
        return $this->hasMany('App\Models\Moto', 'id_cat', 'id_cat');
    }
}
