<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function game(Game $game){
        return view('game',  ['game' => $game]);
    }
}
