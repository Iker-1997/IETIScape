<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Game;
use App\Models\Screen;

class Itinerary extends Model
{
    use HasFactory;

    public function games() {
        return $this->belongsTo(Game::class);
    }

    public function screens() {
        return $this->hasMany(Screen::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'screen_id',
        'game_id'
    ];
}
