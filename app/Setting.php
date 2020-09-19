<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $deskripsi
 * @property string $jumbotron_title
 * @property string $jumbotron_text
 * @property string $jumbotron_image
 * @property string $maps
 * @property string $nomor_wa
 * @property string $instagram
 * @property boolean $maintenance
 */
class Setting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'web_setting';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['deskripsi','deskripsi_naraku', 'jumbotron_title', 'jumbotron_text', 'jumbotron_image', 'maps', 'nomor_wa', 'instagram', 'maintenance'];

}
