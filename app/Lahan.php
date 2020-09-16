<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_user
 * @property int $id_tanaman
 * @property float $luas_lahan
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Tanaman $tanaman
 * @property User $user
 * @property Pemesanan[] $pemesanans
 */
class Lahan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'lahan';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'id_tanaman', 'luas_lahan', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tanaman()
    {
        return $this->belongsTo('App\Tanaman', 'id_tanaman');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemesanans()
    {
        return $this->hasMany('App\Pemesanan', 'id_lahan');
    }
}
