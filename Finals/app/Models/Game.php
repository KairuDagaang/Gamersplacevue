<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function accounts() {
        return $this->belongsTo(Account::class);
    }

    public function accountGames()
    {
        return $this->hasMany(AccountGame::class);
    }
}
