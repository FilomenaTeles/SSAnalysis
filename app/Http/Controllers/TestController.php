<?php

namespace App\Http\Controllers;

use App\Test;
use App\TestPhase;
use App\TestType;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('pages.tests.index', [
            'tests'      => Test::with('testType','testPhase')->get() ,
            'testTypes'  => TestType::with('tests')->get(),
            'testPhases' => TestPhase::with('tests')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('pages.tests.create', [
            'tests'      => Test::with('testType','testPhase')->get() ,
            'testTypes'  => TestType::with('tests')->get(),
            'testPhases' => TestPhase::with('tests')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'test_type_id'  => 'required',
            'test_phase_id' => 'required',
            'test_date'     => 'required',
        ]);

        Test::create($request->all());

       /* $test = new Test();
        $test->test_type_id  = $request->test_type_id;
        $test->test_phase_id = $request->test_phase_id;
        $test->test_date     = $request->test_date;

        $test->save();*/
        return redirect('/tests')->with('status','Teste criado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
