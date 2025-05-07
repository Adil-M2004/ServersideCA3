<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'position', 'team_id', 'age'];

    // Define the relationship with the Team model
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}