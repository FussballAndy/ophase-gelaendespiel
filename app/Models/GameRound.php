<?php

namespace App\Models;

use App\RoundWinner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GameRound extends Model
{
    use HasFactory;
    //

    protected function casts(): array
    {
        return [
            'winner' => RoundWinner::class,
        ];
    }

    public function station(): BelongsTo
    {
        return $this->belongsTo(Station::class);
    }
}
