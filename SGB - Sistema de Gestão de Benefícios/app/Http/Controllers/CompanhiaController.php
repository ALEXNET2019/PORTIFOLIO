<?php

namespace App\Http\Controllers;

use App\Models\Companhia;
use Illuminate\Http\Request;

class CompanhiaController extends Controller
{
    protected $companhia;

    public function __construct(Companhia $companhia)
    {
        $this->companhia = $companhia;
    }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companhia  $companhia
     * @return \Illuminate\Http\Response
     */
    public function show(Companhia $companhia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companhia  $companhia
     * @return \Illuminate\Http\Response
     */
    public function edit(Companhia $companhia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Companhia  $companhia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companhia $companhia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companhia  $companhia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companhia $companhia)
    {
        //
    }
}
