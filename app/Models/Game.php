<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Team;

class Game extends Model
{
    use HasFactory;

    public function teams() {
        return $this->belongsTo(Team::class);
    }
}
