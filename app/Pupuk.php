<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $deskripsi
 * @property int $harga
 * @property int $jumlah
 * @property string $gambar
 * @property int $id_komposisi
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Komposisi $komposisi
 */
class Pupuk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pupuk';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'deskripsi', 'harga', 'jumlah', 'gambar', 'id_komposisi', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function komposisi()
    {
        return $this->hasOne('App\Komposisi', 'id');
    }
}
