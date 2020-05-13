<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use Notifiable, HasRoles;
    
    protected $fillable = [
        'email',
        'last_name',
        'first_name',
        'email_verified_at',
        'password',
        'avatar_path',
    ];

    /** 
     * 
     * Renders
     * 
     */
    public function renderFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function renderAvatar()
    {
        $path = asset('images/no-image.png');

        if ($this->avatar_path):
            $path = asset('storage/' . $this->avatar_path);
        endif;

        return $path;
    }
}
