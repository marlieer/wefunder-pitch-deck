<?php

namespace App\Models;

use App\Models\Highlight;
use App\Models\PitchDeck;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

        /**
     * Eloquent relationships
     * @author Marlie Dueck
     * 
     * @created Jan. 13, 2022
     * @updated Jan. 13, 2022
     */
    public function highlights()
    {
        return $this->hasMany(Highlight::class);
    }

    public function pitchDeck()
    {
        return $this->hasMany(PitchDeck::class);
    }
}
