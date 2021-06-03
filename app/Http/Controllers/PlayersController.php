<?php

namespace App\Http\Controllers;

use App\Models\Player;

class PlayersController extends Controller
{
    //
    public function index()
    {
        $team_name = 'Las Vegas FC';
        $player = new Player('Samuel', 'Brazil', 'Forward');
        $player2 = new Player('Marcelo', 'Brazil', 'Left Back');
        $player3 = new Player('Lionel Messi', 'Argentina', 'Forward');
        $player4 = new Player('Roberto Baggio', 'Italy', 'Forward');
        $player5 = new Player('Romário', 'Brazil', 'Forward');
        $player6 = new Player('Diego Maradona', 'Argentina', 'Midfielder');
        $players = [$player, $player2, $player3, $player4, $player5, $player6];
        return view('players', compact('players', 'team_name'));
    }
}
