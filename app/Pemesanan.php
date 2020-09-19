<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_lahan
 * @property int $id_pupuk
 * @property string $nama_pemesan
 * @property int $jumlah
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Lahan $lahan
 * @property Pupuk $pupuk
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
    protected $fillable = ['id_lahan', 'id_pupuk', 'nama_pemesan', 'jumlah', 'status', 'alamat', 'kontak', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lahan()
    {
        return $this->belongsTo('App\Lahan', 'id_lahan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pupuk()
    {
        return $this->belongsTo('App\Pupuk', 'id_pupuk');
    }
}
