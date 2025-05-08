<?php
namespace App\Http\Controllers;

use App\Models\Fixture;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function edit(Fixture $fixture)
{
    // Pass the fixture to the edit view
    return view('fixtures.edit', compact('fixture'));
}

public function update(Request $request, Fixture $fixture)
{
    // Validate the request
    $validated = $request->validate([
        'home_team_id' => 'required|exists:teams,id',
        'away_team_id' => 'required|exists:teams,id',
        'fixture_date' => 'required|date',
        'fixture_time' => 'required',
        'stadium' => 'required|string|max:255',
    ]);

    // Update the fixture
    $fixture->update($validated);

    // Redirect back to the fixtures page with a success message
    return redirect()->route('fixtures.index')->with('success', 'Fixture updated successfully!');
}
    /**
     * Display a listing of the fixtures.
     */
    public function index()
    {
        // Fetch all fixtures with their related home and away teams
        $fixtures = Fixture::with(['homeTeam', 'awayTeam'])->get();

        // Pass the fixtures to the view
        return view('fixtures.index', ['fixtures' => $fixtures]);
    }
}
