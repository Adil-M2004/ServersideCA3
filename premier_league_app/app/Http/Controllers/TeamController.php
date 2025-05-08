<?php
namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store(Request $request)
{
    // Validate the request
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'stadium' => 'required|string|max:255',
        'city' => 'required|string|max:255',
    ]);

    // Create a new team
    Team::create($validated);

    // Redirect back to the teams page with a success message
    return redirect()->route('teams.index')->with('success', 'Team added successfully!');
}

public function destroy(Team $team)
{
    // Delete the team
    $team->delete();

    // Redirect back to the teams page with a success message
    return redirect()->route('teams.index')->with('success', 'Team deleted successfully!');
}

    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }
}
