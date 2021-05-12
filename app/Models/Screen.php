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
}
