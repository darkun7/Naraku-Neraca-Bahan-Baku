<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $jenis_bibit
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Lahan[] $lahans
 */
class Tanaman extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tanaman';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'jenis_bibit', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lahans()
    {
        return $this->hasMany('App\Lahan', 'id_tanaman');
    }
}
