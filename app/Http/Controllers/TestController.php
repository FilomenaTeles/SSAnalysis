<?php

namespace App\Http\Controllers;

use App\Course;
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


            'tests'      => Test::paginate(5), Test::with('testType', 'testPhase', 'students')->where('test_date')->get(),
            'testTypes'  => TestType::with('tests')->get(),
            'testPhases' => TestPhase::with('tests')->get(),
            'groups'     => Group:: with('students')->get(),
            'students'   => Student::with('group')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {

        return view('pages.tests.create', [
            'tests'      => Test::with('testType', 'testPhase', 'students')->get(),
            'testTypes'  => TestType::with('tests')->get(),
            'testPhases' => TestPhase::with('tests')->get(),
            'groups'     => Group:: with('students')->get(),
            'students'   => Student::with('group')->get(),
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


        $test                = new Test();
        $test->test_type_id  = $request->test_type_id;
        $test->test_phase_id = $request->test_phase_id;
        $test->test_date     = $request->test_date;

        $test->save();

        $turma_id = $request->group_id;

        $students = Student::all()->where('group_id', '=', $turma_id);
        foreach ($students as $student) {

            $test->students()->attach($student->id);


        }

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
            'test'       => $test,
            'testTypes'  => TestType::all(),
            'testPhases' => TestPhase::all(),
            'students'   => Student::all(),
            'groups'     => Group::all()
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
        $test->test_type_id  = $request->test_type_id;
        $test->test_phase_id = $request->test_phase_id;
        $test->test_date     = $request->test_date;
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
        $test = Test::find($test->id);
        $test->delete();
        return redirect('tests')->with('status', 'Item apagado com sucesso!');
    }

    /* GRADES SECTION */

    public function stIndex()
    {
        return view('pages.studentTests.index', [
            'tests'    => Test::with('students'),
            'groups'   => Group:: with('students')->get(),
            'students' => Student::with('group')->get(),
            'courses'  => Course::with('groups')->get()
        ]);

    }

    public function stOptionIndex(Group $groupTest)
    {
        return view('pages.studentTests.option', [

            'groupTest'  => $groupTest,
            'tests'      => Test::with('students')->get(),
            'groups'     => Group:: with('students')->get(),
            'students'   => Student::with('group')->get(),
            'courses'    => Course::with('groups')->get(),
            'testTypes'  => TestType::with('tests')->get(),
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
     *
     */
    public function stShow(Group $groupTest, Test $testID)
    {
        return view('pages.studentTests.show', [
            'groupTest' => $groupTest,
            'testID'    => $testID,
            'students'  => Student::with('group')->get(),
            'tests'     => Test::with('students')->get(),
            'groups'    => Group::with('students')->get()
        ]);
    }


    public function stEdit(Group $groupTest, Test $testID)
    {
        return view('pages.studentTests.edit', [
            'groupTest' => $groupTest,
            'testID'    => $testID,
            'students'  => Student::with('group')->get(),
            'tests'     => Test::with('students')->get(),
            'groups'    => Group::with('students')->get()
        ]);
    }

    public function stEditSS(Group $groupTest, Test $testID)
    {
        return view('pages.studentTests.editSS', [
            'groupTest' => $groupTest,
            'testID'    => $testID,
            'students'  => Student::with('group')->get(),
            'tests'     => Test::with('students')->get(),
            'groups'    => Group::with('students')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function stUpdate(Request $request, Test $studentTest)
    {
        foreach ($request->pivot_id as $key => $pivotId) {
            //vai buscar o elemento da tabela pivot a editar
            $pivot_table = StudentTest::find($pivotId);
            //vai buscar a nota no array grade na posição do array pivot_id
            $grade = $request->grade[$key];
            //associa nota ao aluno
            $pivot_table->grade = $grade;
            $pivot_table->save();
        }

        return redirect('studentTests')->with('status', 'Notas associadas com sucesso!');

    }

    public function stUpdateSS(Request $request, Test $studentTest)
    {
        foreach ($request->pivot_id as $key => $pivotId) {
            //vai buscar o elemento da tabela pivot a editar
            $pivot_table = StudentTest::find($pivotId);
            //vai buscar a nota no array grade na posição do array pivot_id
            $ss1 = $request->ss1[$key];
            $ss2 = $request->ss2[$key];
            $ss3 = $request->ss3[$key];
            $ss4 = $request->ss4[$key];
            $ss5 = $request->ss5[$key];
            $ss6 = $request->ss6[$key];
            $ss7 = $request->ss7[$key];
            $ss8 = $request->ss8[$key];
            $ss9 = $request->ss9[$key];
            $grade = collect([$ss1, $ss2, $ss3, $ss4, $ss5, $ss6, $ss7, $ss8, $ss9])->avg();
            $gradef = number_format($grade, 2, '.', '');
            //associa nota ao aluno
            $pivot_table->grade = $gradef;
            $pivot_table->save();
        }

        return redirect('studentTests')->with('status', 'Notas associadas com sucesso!');

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

    //############ ANALISE COMPARATIVA ############

    public function chartIndex()
    {

        return view('pages.charts.index', [
            'tests'   => Test::with('students'),
            'groups'  => Group:: with('students')->get(),
            'courses' => Course::with('groups')->get()
        ]);
    }

    public function chartPhasesIndex(Group $groupId)
    {

        return view('pages.charts.phases', [
            'groupId'    => $groupId,
            'tests'      => Test::with('students'),
            'groups'     => Group:: with('students')->get(),
            'testPhases' => TestPhase::all(),

        ]);
    }

    public function chartPhase(Group $groupId, TestPhase $phaseId)
    {



        return view('pages.charts.phases', [
            'phaseId'    => $phaseId,
            'groupId'    => $groupId,
            'tests'      => Test::with('students')->get(),
            'students'   => Student::with('group')->get(),
            'groups'     => Group:: with('students')->get(),
            'testPhases' => TestPhase::all(),



        ]);
    }


    public function chartPhaseCompare(Group $groupId, int $comp)
    {

        return view('pages.charts.phases', [
            'comp'       => $comp,
            'groupId'    => $groupId,
            'tests'      => Test::with('students')->get(),
            'students'   => Student::with('group')->get(),
            'groups'     => Group:: with('students')->get(),
            'testPhases' => TestPhase::all(),

        ]);
    }
}

