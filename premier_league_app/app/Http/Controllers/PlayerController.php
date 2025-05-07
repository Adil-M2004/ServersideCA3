<?php
namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        // Fetch all players from the database
        $players = Player::all();

        // Pass the players to the view
        return view('players.index', compact('players'));
    }
}