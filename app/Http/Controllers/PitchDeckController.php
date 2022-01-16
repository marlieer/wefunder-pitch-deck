<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\PitchDeck;
use App\Http\Requests\StorePitchDeckRequest;
use App\Http\Requests\UpdatePitchDeckRequest;

class PitchDeckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePitchDeckRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePitchDeckRequest $request)
    {
        $company = Company::find($request->company_id);
        $path = $request->file('file')->store('pitchdecks');
        $company->pitchDecks()->save(new PitchDeck(['file' => $path]));
        return response()->json(['created' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PitchDeck  $pitchDeck
     * @return \Illuminate\Http\Response
     */
    public function show(PitchDeck $pitchDeck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PitchDeck  $pitchDeck
     * @return \Illuminate\Http\Response
     */
    public function edit(PitchDeck $pitchDeck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePitchDeckRequest  $request
     * @param  \App\Models\PitchDeck  $pitchDeck
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePitchDeckRequest $request, PitchDeck $pitchDeck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PitchDeck  $pitchDeck
     * @return \Illuminate\Http\Response
     */
    public function destroy(PitchDeck $pitchDeck)
    {
        //
    }
}
