<?php
namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        // Fetch all players from the database
        $players = Player::with('team')->get();

        // Pass the players to the view
        return view('players.index', compact('players'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'team_id' => 'required|exists:teams,id',
            'age' => 'required|integer|min:16|max:50',
        ]);

        // Create a new player
        Player::create($validated);

        // Redirect back to the players page with a success message
        return redirect()->route('players.index')->with('success', 'Player added successfully!');
    }

    public function destroy(Player $player)
    {
        // Delete the player
        $player->delete();

        // Redirect back to the players page with a success message
        return redirect()->route('players.index')->with('success', 'Player deleted successfully!');
    }
}