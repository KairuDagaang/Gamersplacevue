<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountGame;

class AccountGameController extends Controller
{
    public function accountgames(){
        $accountgames = AccountGame::all();
        return view('accountgames.accountgame', ['accountgames' => $accountgames]);
    }
}
