<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusdataRequest;
use App\Http\Requests\UpdateBusdataRequest;
use App\Models\Busdata;

class BusdataController extends Controller
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
     * @param  \App\Http\Requests\StoreBusdataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusdataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Busdata  $busdata
     * @return \Illuminate\Http\Response
     */
    public function show(Busdata $busdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Busdata  $busdata
     * @return \Illuminate\Http\Response
     */
    public function edit(Busdata $busdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusdataRequest  $request
     * @param  \App\Models\Busdata  $busdata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusdataRequest $request, Busdata $busdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Busdata  $busdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Busdata $busdata)
    {
        //
    }
}
