<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'player_count', 'coach_name', 'tournament_id'];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
