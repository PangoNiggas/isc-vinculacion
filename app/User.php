<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPasswordNotification;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

        /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }


    public function roles(){
        
        return $this->belongsToMany('App\Models\Role');
    }

    public function asesor()
    {
        return $this->hasOne('App\Models\Asesor');
    }

    public function emprendedor(){
        return $this->belongsTo(Emprendedor::class);
    }

    public function authorizeRoles($roles)
        {
            if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta acción no está autorizada.');
    }

    public function hasAnyRole($roles)
        {
            if (is_array($roles)) {
                foreach ($roles as $role) {
                    if ($this->hasRole($role)) {
                        return true;
                    }
                }
            } else {
        
                    if ($this->hasRole($roles)) {
                    return true;
                    }
                }
            return false;
        }

    public function hasRole($role)
        {
            if ($this->roles()->where('name', $role)->first()) {
                return true;
            }
            return false;
        }
}
