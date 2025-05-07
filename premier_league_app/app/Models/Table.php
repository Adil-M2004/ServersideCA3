<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $table = 'league_table'; // Specify the table name

    protected $fillable = [
        'team_id',
        'played',
        'wins',
        'draws',
        'losses',
        'goals_for',
        'goals_against',
        'goal_difference',
        'points',
    ];

    /**
     * Relationship to the Team model.
     */
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}