<?php
namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display the Premier League table.
     */
    public function index()
    {
        // Fetch the league table data and include the related team information
        $leagueTable = Table::with('team')->orderBy('points', 'desc')->get();

        // Pass the league table data to the view
        return view('table.index', compact('leagueTable'));
    }
}