<?php

namespace App\Http\Controllers;

use App\Models\CivilState;
use App\Http\Requests\StoreCivilStateRequest;
use App\Http\Requests\UpdateCivilStateRequest;

class CivilStateController extends Controller
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
     * @param  \App\Http\Requests\StoreCivilStateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCivilStateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CivilState  $civilState
     * @return \Illuminate\Http\Response
     */
    public function show(CivilState $civilState)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CivilState  $civilState
     * @return \Illuminate\Http\Response
     */
    public function edit(CivilState $civilState)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCivilStateRequest  $request
     * @param  \App\Models\CivilState  $civilState
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCivilStateRequest $request, CivilState $civilState)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CivilState  $civilState
     * @return \Illuminate\Http\Response
     */
    public function destroy(CivilState $civilState)
    {
        //
    }
}
