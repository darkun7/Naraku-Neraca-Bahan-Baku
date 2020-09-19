<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_pupuk
 * @property int $id_bahan
 * @property float $rasio
 * @property string $satuan
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Bahan $bahan
 * @property Pupuk $pupuk
 */
class Komposisi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'komposisi';

    /**
     * @var array
     */
    protected $fillable = ['id_pupuk', 'id_bahan', 'rasio', 'satuan', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bahan()
    {
        return $this->belongsTo('App\Bahan', 'id_bahan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pupuk()
    {
        return $this->belongsTo('App\Pupuk', 'id_pupuk');
    }
}
