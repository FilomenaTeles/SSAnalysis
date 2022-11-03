<?php

namespace App\Http\Controllers;

use App\TestPhase;
use Illuminate\Http\Request;

class TestPhaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.testPhases.index');
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
     * @param  \App\TestPhase  $testPhase
     * @return \Illuminate\Http\Response
     */
    public function show(TestPhase $testPhase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestPhase  $testPhase
     * @return \Illuminate\Http\Response
     */
    public function edit(TestPhase $testPhase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestPhase  $testPhase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestPhase $testPhase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestPhase  $testPhase
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestPhase $testPhase)
    {
        //
    }
}
