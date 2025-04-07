<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    // Specify the custom primary key
    protected $primaryKey = 'id_user';

    // Indicate that the primary key is not an auto-incrementing integer
    public $incrementing = false;

    // Specify the key type as UUID
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'email',
        'password',
        'no_telepon',
        'role',
        'foto_profil',
        'is_verified'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_verified' => 'date',
        'email_verified_at' => 'datetime',
    ];

    // If you're using UUID, you might want to add a boot method to generate UUID
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function entitasPenyewa()
    {
        return $this->hasOne(EntitasPenyewa::class, "id_user", "id_user");
    }

    public function asMitra()
    {
        return $this->hasOne(Mitra::class, "id_user", "id_user");
    }
}
