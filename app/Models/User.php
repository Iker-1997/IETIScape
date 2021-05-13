<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\RolesUsersGame;
use App\Models\UsersTeam;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function roles_users_games() {
        return $this->hasMany(RolesUsersGame::class);
    }

    public function users_teams() {
        return $this->hasMany(UsersTeam::class);
    }
        
    public function scopeName($query, $name){
        if($name)
            return $query->where('name', 'LIKE', "%name%");
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
