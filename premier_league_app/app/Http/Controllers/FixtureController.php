<?php
namespace App\Http\Controllers;

use App\Models\Fixture;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
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