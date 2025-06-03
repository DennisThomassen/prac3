<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{

     public function teams()
    {
        return $this->hasMany(Team::class);
    }
    use HasFactory;
    protected $fillable = ['name', 'rounds', 'teams_competing', 'prize_amount'];
}
