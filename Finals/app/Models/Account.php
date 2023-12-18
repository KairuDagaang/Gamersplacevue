<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'account_name', 
        'ign', 
        'email', 
        'password'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function games() {
        return $this->hasMany(Game::class);
    }

    public function accountGames()
    {
        return $this->hasMany(AccountGame::class);
    }
}
