<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Game;
use App\Models\Role;

class RolesUsersGame extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function games() {
        return $this->belongsTo(Game::class);
    }

    public function roles() {
        return $this->belongsTo(Role::class);
    }
}
