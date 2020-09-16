<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_lahan
 * @property int $id_pupuk
 * @property int $jumlah
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Lahan $lahan
 */
class Pemesanan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pemesanan';

    /**
     * @var array
     */
    protected $fillable = ['id_lahan', 'id_pupuk', 'jumlah', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lahan()
    {
        return $this->belongsTo('App\Lahan', 'id_lahan');
    }
}
