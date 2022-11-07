<?php

namespace App\Http\Controllers;

use App\Group;
use App\Student;

use App\StudentTest;
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

            'tests'      => Test::paginate(5),Test::with('testType','testPhase', 'students')->orderBy('test_date', 'asc')->get(),
            'testTypes'  => TestType::with('tests')->get(),
            'testPhases' => TestPhase::with('tests')->get(),
            'groups'     => Group:: with('students')->get(),
            'students'   =>Student::with ('group')->get(),
           // 'studentTests' => StudentTest::with('test', 'student.group'),
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
            'testPhases' => TestPhase::with('tests')->get(),
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


        $test = new Test();
        $test->test_type_id  = $request->test_type_id;
        $test->test_phase_id = $request->test_phase_id;
        $test->test_date     = $request->test_date;

        $test->save();

        $turma_id = $request->group_id;

        $test->students()->sync($turma_id);
        $test->load('students');

        return redirect('tests')->with('status','Teste criado com sucesso!');
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
        return view('pages.tests.edit', [
            'test'      => $test,
            'testTypes'  => TestType::all(),
            'testPhases' => TestPhase::all(),
        ]);
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
        $test                = Test::find($test->id);
        $test->test_type_id  = $request->test_type_id;
        $test->test_phase_id = $request->test_phase_id;
        $test->test_date     = $request->test_date;
        $test->save();

        return redirect('tests')->with('status','Teste editado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //$test = Test::find($test->id);
        $test->delete();
        return redirect('tests')->with('status','Item apagado com sucesso!');
    }

    public function stIndex()
    {
        return view ('pages.studentTests.index');
    }

    public function stCreate()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stStore(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentTest  $studentTest
     * @return \Illuminate\Http\Response
     */
    public function stShow(Test $studentTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentTest  $studentTest
     * @return \Illuminate\Http\Response
     */
    public function stEdit(Test $studentTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentTest  $studentTest
     * @return \Illuminate\Http\Response
     */
    public function stUpdate(Request $request, Test $studentTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentTest  $studentTest
     * @return \Illuminate\Http\Response
     */
    public function stDestroy(Test $studentTest)
    {
        //
    }
}

