<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\RolesUsersGame;
use App\Models\Screen;

class Role extends Model
{
    use HasFactory;

    public function roles_users_games() {
        return $this->hasMany(RolesUsersGame::class);
    }

    public function screens() {
        return $this->hasMany(Screen::class);
    }

    protected $fillable = [
        'name',
    ];
}
