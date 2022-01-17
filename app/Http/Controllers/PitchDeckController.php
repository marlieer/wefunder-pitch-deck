<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\PitchDeck;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePitchDeckRequest;
use App\Http\Requests\UpdatePitchDeckRequest;

class PitchDeckController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePitchDeckRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePitchDeckRequest $request)
    {
        $company = Company::find($request->company_id);
        $path = $request->file('file')->store('public/pitchdecks');
        $company->pitchDeck()->save(new PitchDeck(['file' => $path, 'title' => $request->title ]));
        return response()->json(['created' => true]);
    }
}
