<?php

namespace App\Http\Controllers;

use App\Models\IdDocument;
use App\Http\Requests\StoreIdDocumentRequest;
use App\Http\Requests\UpdateIdDocumentRequest;

class IdDocumentController extends Controller
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
     * @param  \App\Http\Requests\StoreIdDocumentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIdDocumentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IdDocument  $idDocument
     * @return \Illuminate\Http\Response
     */
    public function show(IdDocument $idDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IdDocument  $idDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(IdDocument $idDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIdDocumentRequest  $request
     * @param  \App\Models\IdDocument  $idDocument
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIdDocumentRequest $request, IdDocument $idDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IdDocument  $idDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(IdDocument $idDocument)
    {
        //
    }
}
