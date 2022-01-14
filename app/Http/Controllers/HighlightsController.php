<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHighlightsRequest;
use App\Http\Requests\UpdateHighlightsRequest;
use App\Models\Highlights;

class HighlightsController extends Controller
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
     * @param  \App\Http\Requests\StoreHighlightsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHighlightsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Highlights  $highlights
     * @return \Illuminate\Http\Response
     */
    public function show(Highlights $highlights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Highlights  $highlights
     * @return \Illuminate\Http\Response
     */
    public function edit(Highlights $highlights)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHighlightsRequest  $request
     * @param  \App\Models\Highlights  $highlights
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHighlightsRequest $request, Highlights $highlights)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Highlights  $highlights
     * @return \Illuminate\Http\Response
     */
    public function destroy(Highlights $highlights)
    {
        //
    }
}
