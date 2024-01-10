<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_image
 * @property integer $id_circ
 * @property string $image
 * @property Circuit $circuit
 */
class circuit_images extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_image';
    public $timestamps = false;



    /**
     * @var array
     */
    protected $fillable = ['id_circ', 'image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function circuit()
    {
        return $this->belongsTo('App\Models\Circuit', 'id_circ', 'id_circ');
    }
}
