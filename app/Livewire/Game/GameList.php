<?php

namespace App\Livewire\Game;

use Livewire\Component;
use App\Models\Game;

class GameList extends Component
{
    public $games;


    public function render()
    {

        $this->games = Game::with('genre')->get();

        return view('livewire.game.game-list');
    }
}
