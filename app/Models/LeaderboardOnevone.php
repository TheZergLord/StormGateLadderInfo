<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaderboardOnevone extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'rank',
        'nickname',
        'race',
        'league',
        'mmr',
        'wins',
        'losses',
        'ties',
        'winrate',
    ];
}
