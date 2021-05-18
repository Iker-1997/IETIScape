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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time',
        'finished',
        'team_id',
        'itinerary'
    ];
}
