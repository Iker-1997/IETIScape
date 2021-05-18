<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Itinerary;
use App\Models\Screen;

class Screen extends Model
{
    use HasFactory;

    public function itinerarys() {
        return $this->belongsTo(Itinerary::class);
    }

    public function roles() {
        return $this->belongsTo(Screen::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $casts = [
        'data' => 'array',
    ];

    protected $fillable = [
        'data',
        'order',
        'role_id',
        'itinerary',
    ];
}
