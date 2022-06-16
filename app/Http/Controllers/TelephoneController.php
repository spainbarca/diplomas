<?php

namespace App\Http\Controllers;

use App\Models\Telephone;
use App\Http\Requests\StoreTelephoneRequest;
use App\Http\Requests\UpdateTelephoneRequest;

class TelephoneController extends Controller
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
     * @param  \App\Http\Requests\StoreTelephoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTelephoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function show(Telephone $telephone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function edit(Telephone $telephone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTelephoneRequest  $request
     * @param  \App\Models\Telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTelephoneRequest $request, Telephone $telephone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Telephone  $telephone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Telephone $telephone)
    {
        //
    }
}
