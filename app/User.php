<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone_number
 * @property string $password
 * @property string $level
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Lahan[] $lahans
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone_number', 'password', 'level', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lahans()
    {
        return $this->hasMany('App\Lahan', 'id_user');
    }
}
