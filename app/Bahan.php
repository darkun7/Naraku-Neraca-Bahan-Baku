<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property int $jumlah
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Komposisi[] $komposisis
 */
class Bahan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bahan';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'jumlah', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function komposisis()
    {
        return $this->hasMany('App\Komposisi', 'id_bahan');
    }
}
