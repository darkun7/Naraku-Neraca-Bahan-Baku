<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;
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
class User extends Authenticatable
{
    use Notifiable, HasRoles, SoftDeletes;
    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone_number', 'password', 'level', 'created_at', 'updated_at', 'deleted_at'];

    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lahans()
    {
        return $this->hasMany('App\Lahan', 'id_user');
    }
}
