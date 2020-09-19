<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
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
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bahan';
    protected $dates = ['deleted_at'];
    /**
     * @var array
     */
    protected $fillable = ['nama', 'jumlah', 'satuan', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function komposisis()
    {
        return $this->hasMany('App\Komposisi', 'id_bahan');
    }
}
