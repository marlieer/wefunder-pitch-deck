<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PitchDeck extends Model
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
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
