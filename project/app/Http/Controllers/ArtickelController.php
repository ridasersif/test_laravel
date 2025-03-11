<?php

namespace App\Http\Controllers;

use App\Models\Artickel;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArtickelRequest;
use App\Http\Requests\UpdateArtickelRequest;

class ArtickelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtickelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artickel $artickel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artickel $artickel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtickelRequest $request, Artickel $artickel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artickel $artickel)
    {
        //
    }
}
