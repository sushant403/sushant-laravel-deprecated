<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_dark_mode',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * The accessors to return to the user's personal info.
     *
     * @var array
     */

    // public function getIsAdminAttribute()
    // {
    //     return $this->roles()->where('id', 1)->exists();
    // }

    public function about()
    {
        return $this->hasMany(About::class);
    }

    public function frontend()
    {
        return $this->hasMany(Frontend::class);
    }

    public function resume()
    {
        return $this->hasMany(Resume::class);
    }

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
