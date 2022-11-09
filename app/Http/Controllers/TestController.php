<?php

namespace App\Http\Controllers;

use App\Course;
use App\Group;
use App\Student;
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


            'tests' => Test::paginate(5), Test::with('testType', 'testPhase', 'students')->where('test_date')->get(),
            'testTypes' => TestType::with('tests')->get(),
            'testPhases' => TestPhase::with('tests')->get(),
            'groups' => Group:: with('students')->get(),
            'students' => Student::with('group')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {

        return view('pages.tests.create', [
            'tests' => Test::with('testType', 'testPhase', 'students')->get(),
            'testTypes' => TestType::with('tests')->get(),
            'testPhases' => TestPhase::with('tests')->get(),
            'groups' => Group:: with('students')->get(),
            'students' => Student::with('group')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'test_type_id' => 'required',
            'test_phase_id' => 'required',
            'test_date' => 'required',
        ]);


        $test = new Test();
        $test->test_type_id = $request->test_type_id;
        $test->test_phase_id = $request->test_phase_id;
        $test->test_date = $request->test_date;

        $test->save();

        $turma_id = $request->group_id;

        $test->students()->sync($turma_id);
        $test->load('students');

        return redirect('tests')->with('status', 'Teste criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Test $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }


    public function edit(Test $test)
    {
        return view('pages.tests.edit', [
            'test' => $test,
            'testTypes' => TestType::all(),
            'testPhases' => TestPhase::all(),
            'students' => Student::all(), //added
            'groups' => Group::all()       //added
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Test $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        $test = Test::find($test->id);
        $test->test_type_id = $request->test_type_id;
        $test->test_phase_id = $request->test_phase_id;
        $test->test_date = $request->test_date;
        $test->save();

        return redirect('tests')->with('status', 'Teste editado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Test $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //$test = Test::find($test->id);
        $test->delete();
        return redirect('tests')->with('status', 'Item apagado com sucesso!');
    }

    /* GRADES SECTION */

    public function stIndex()
    {
        return view('pages.studentTests.index', [
            'tests' => Test::paginate(5), Test::with('students'),
            'groups' => Group:: with('students')->get(),
            'students' => Student::with('group')->get(),
            'courses' => Course::with('groups')->get()
        ]);

    }

    public function stOptionIndex(Group $groupTest)
    {
        return view('pages.studentTests.option', [

            'groupTest' => $groupTest,
            'tests' => Test::with('students')->get(),
            'groups' => Group:: with('students')->get(),
            'students' => Student::with('group')->get(),
            'courses' => Course::with('groups')->get(),
            'testTypes' => TestType::with('tests')->get(),
            'testPhases' => TestPhase::with('tests')->get(),

        ]);
    }

    public function stCreate()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function stStore(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\StudentTest $studentTest
     * @return \Illuminate\Http\Response
     */
    public function stShow(Test $studentTest)
    {
        //
    }


    public function stEdit(Group $groupTest, Test $testID)
    {
        return view('pages.studentTests.edit', [
            'groupTest' => $groupTest,
            'testID' => $testID,
            'students'    => Student::with('group')->get(),
            'tests'   => Test::with('students')->get(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\StudentTest $studentTest
     * @return \Illuminate\Http\Response
     */
    public function stUpdate(Request $request, Test $studentTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\StudentTest $studentTest
     * @return \Illuminate\Http\Response
     */
    public function stDestroy(Test $studentTest)
    {
        //
    }
}

