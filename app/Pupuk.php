<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * @property int $id
 * @property string $nama
 * @property string $deskripsi
 * @property int $harga
 * @property int $jumlah
 * @property string $gambar
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Komposisi[] $komposisis
 * @property Pemesanan[] $pemesanans
 */
class Pupuk extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pupuk';
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['nama', 'deskripsi', 'harga', 'jumlah', 'gambar', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function komposisis()
    {
        return $this->hasMany('App\Komposisi', 'id_pupuk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemesanans()
    {
        return $this->hasMany('App\Pemesanan', 'id_pupuk');
    }
}
