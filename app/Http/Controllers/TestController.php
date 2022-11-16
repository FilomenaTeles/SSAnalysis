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
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {

        return view('pages.tests.index', [


            'tests' => Test::with('testType', 'testPhase', 'students')->orderBy('test_date')->paginate(10),
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
        $turma_id = $request->group_id;


        $students = Student::all()->where('group_id', '=', $turma_id);

        $student = Student::all()->where('group_id', '=', $turma_id)->first();

        if (count( $students)==0){
        return redirect('tests')->with('erro', 'Não é possivel criar teste para turma sem alunos');
    }
        $tests = Test::all()->where('test_phase_id', $request->test_phase_id);
        $studentTests2 = StudentTest::all()->where('student_id', '=', $student->id);

        foreach ($tests as $test){
            foreach ($studentTests2 as $studentTest2){
            if (($test->id == $studentTest2->test_id) && ($test->test_type_id == $request->test_type_id)){
                return redirect('tests')->with('erro', 'Teste já existe!');
            }
            }
        }

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
            'test' => $test,
            'testTypes' => TestType::all(),
            'testPhases' => TestPhase::all(),
            'students' => Student::all(),
            'groups' => Group::all()
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
        $test = Test::find($test->id);
        $test->delete();
        return redirect('tests')->with('status', 'Item apagado com sucesso!');
    }

    /* GRADES SECTION */

    public function stIndex()
    {
        return view('pages.studentTests.index', [
            'tests' => Test::with('students'),
            'groups' => Group:: with('students')->get(),
            'students' => Student::with('group')->get(),
            'courses' => Course::with('groups')->get()
        ]);

    }

    public function stOptionIndex(Group $groupTest)
    {
        return view('pages.studentTests.option', [

            'groupTest' => $groupTest,
            'tests' => Test::with('students')->orderBy('test_date')->get(),
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
     *
     */
    public function stShow(Group $groupTest, Test $testID)
    {
        return view('pages.studentTests.show', [
            'groupTest' => $groupTest,
            'testID' => $testID,
            'students' => Student::with('group')->get(),
            'tests' => Test::with('students')->get(),
            'groups' => Group::with('students')->get()
        ]);
    }


    public function stEdit(Group $groupTest, Test $testID)
    {
        return view('pages.studentTests.edit', [
            'groupTest' => $groupTest,
            'testID' => $testID,
            'students' => Student::with('group')->get(),
            'tests' => Test::with('students')->get(),
            'groups' => Group::with('students')->get()
        ]);
    }

    public function stEditSS(Group $groupTest, Test $testID)
    {
        return view('pages.studentTests.editSS', [
            'groupTest' => $groupTest,
            'testID' => $testID,
            'students' => Student::with('group')->get(),
            'tests' => Test::with('students')->get(),
            'groups' => Group::with('students')->get()
        ]);
    }

    public function stEditSS2(Group $groupTest, Test $testID)
    {
        return view('pages.studentTests.editSS2', [
            'groupTest' => $groupTest,
            'testID' => $testID,
            'students' => Student::with('group')->get(),
            'tests' => Test::with('students')->get(),
            'groups' => Group::with('students')->get()
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

        $group_id = $request->group_id;

        return redirect('studentTests/'.$group_id.'/option')->with('status', 'Notas associadas com sucesso!');
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
        $group_id = $request->group_id;

        return redirect('studentTests/'.$group_id.'/option')->with('status', 'Notas associadas com sucesso!');
    }

    public function stUpdateSS2(Request $request, Test $studentTest)
    {

        //vai buscar o elemento da tabela pivot a editar
        $pivot_table = StudentTest::find($request->pivot_id);
        //vai buscar a nota no array grade na posição do array pivot_id
        $ss1 = $request->ss1;
        $ss2 = $request->ss2;
        $ss3 = $request->ss3;
        $ss4 = $request->ss4;
        $ss5 = $request->ss5;
        $ss6 = $request->ss6;
        $ss7 = $request->ss7;
        $ss8 = $request->ss8;
        $ss9 = $request->ss9;
        $grade = collect([$ss1, $ss2, $ss3, $ss4, $ss5, $ss6, $ss7, $ss8, $ss9])->avg();
        $gradef = number_format($grade, 2, '.', '');
        //associa nota ao aluno

        $pivot_table->grade = $gradef;
        $pivot_table->save();
        $group_id = $request->group_id;

            return redirect('studentTests/'.$group_id.'/option')->with('status', 'Notas editadas com sucesso!');
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
        $groupTests = [];


        $studentTests = StudentTest::all();
        $students = Student::with('group')->where('isActive',1)->get();
        foreach ($studentTests as $test) {
            foreach ($students as $student) {
                if ($test->student_id == $student->id) {
                    array_push($groupTests, $student->group_id);

                }
            }

        }
        $groupTests = array_unique($groupTests);


        return view('pages.charts.index', [
            'tests' => Test::with('students'),
            'groups' => Group:: with('students')->get(),
            'courses' => Course::with('groups')->get(),
            'groupTests' => $groupTests,
            'studentTests' => $studentTests,

        ]);
    }

    public function chartPhasesIndex(Group $groupId)
    {
        $tests = Test::all();
        $studentTests = StudentTest::all();
        $testsPhasesList = [];


        foreach ($tests as $test) {
            foreach ($test->students as $student) {
                if ($student->group_id == $groupId->id) {
                    $flag=true;
                    for ($j = 0; $j < sizeof($testsPhasesList); $j++) {
                        if ($testsPhasesList[$j]["id"] == $test->test_phase_id) {
                            array_push($testsPhasesList[$j]["test"], $test->test_type_id);
                            $flag=false;
                            break;
                        }
                    }
                    if($flag)
                        array_push($testsPhasesList, array("id" => $test->test_phase_id, "test" => [$test->test_type_id]));
                }

                //$testsPhasesLis[0]["test"][0]
                //$testsPhasesLis[0]["id"]




            }

        }

        return view('pages.charts.phases', [
            'groupId' => $groupId,
            'tests' => $tests,
            'groups' => Group:: with('students')->get(),
            'testPhases' => TestPhase::all(),
            'studentTests' => $studentTests,
            'students' => Student::with('group')->where('isActive',1)->get(),
            'testsPhasesList' => $testsPhasesList,

        ]);
    }

    public function chartPhase(Group $groupId, TestPhase $phaseId)
    {
        $tests = Test::all();
        $studentTests = StudentTest::all();
        $testsPhasesList = [];


        foreach ($tests as $test) {
            foreach ($test->students as $student) {
                if ($student->group_id == $groupId->id) {
                    $flag=true;
                    for ($j = 0; $j < sizeof($testsPhasesList); $j++) {
                        if ($testsPhasesList[$j]["id"] == $test->test_phase_id) {
                            array_push($testsPhasesList[$j]["test"], $test->test_type_id);
                            $flag=false;
                            break;
                        }
                    }
                    if($flag)
                        array_push($testsPhasesList, array("id" => $test->test_phase_id, "test" => [$test->test_type_id]));
                }

                //$testsPhasesLis[0]["test"][0]
                //$testsPhasesLis[0]["id"]




            }

        }

        return view('pages.charts.phases', [
            'phaseId' => $phaseId,
            'groupId' => $groupId,
            'tests' => Test::with('students')->get(),
            'students' => Student::with('group')->where('isActive',1)->get(),
            'groups' => Group:: with('students')->get(),
            'testPhases' => TestPhase::all(),
            'studentTests' => $studentTests,
            'testsPhasesList' => $testsPhasesList,


        ]);
    }


    public function chartPhaseCompare(Group $groupId, int $comp)
    {
        $studentTests = StudentTest::all();
        $testsPhasesList = [];
        $tests = Test::all();


        foreach ($tests as $test) {
            foreach ($test->students as $student) {

                if ($student->group_id == $groupId->id) {
                    $flag=true;
                    for ($j = 0; $j < sizeof($testsPhasesList); $j++) {
                        if ($testsPhasesList[$j]["id"] == $test->test_phase_id) {
                            array_push($testsPhasesList[$j]["test"], $test->test_type_id);
                            $flag=false;
                            break;
                        }
                    }
                    if($flag)
                        array_push($testsPhasesList, array("id" => $test->test_phase_id, "test" => [$test->test_type_id]));
                }

                //$testsPhasesLis[0]["test"][0]
                //$testsPhasesLis[0]["id"]




            }

        }



        return view('pages.charts.phases', [
            'comp' => $comp,
            'groupId' => $groupId,
            'tests' => Test::with('students')->get(),
            'students' => Student::with('group')->where('isActive',1)->get(),
            'groups' => Group:: with('students')->get(),
            'testPhases' => TestPhase::all(),
            'studentTests' => $studentTests,
            'testsPhasesList' => $testsPhasesList,

        ]);
    }

    public function chartPhaseStudents(Group $groupId, int $st)
    {
        $studentTests = StudentTest::all();
        $testsPhasesList = [];
        $tests = Test::all();


        foreach ($tests as $test) {
            foreach ($test->students as $student) {
                if ($student->group_id == $groupId->id) {
                    $flag=true;
                    for ($j = 0; $j < sizeof($testsPhasesList); $j++) {
                        if ($testsPhasesList[$j]["id"] == $test->test_phase_id) {
                            array_push($testsPhasesList[$j]["test"], $test->test_type_id);
                            $flag=false;
                            break;
                        }
                    }
                    if($flag)
                    array_push($testsPhasesList, array("id" => $test->test_phase_id, "test" => [$test->test_type_id]));
                }

                //$testsPhasesLis[0]["test"][0]
                //$testsPhasesLis[0]["id"]




            }

        }


        return view('pages.charts.phases', [
            'st' => $st,
            'groupId' => $groupId,
            'tests' => Test::with('students')->get(),
            'students' => Student::with('group')->where('isActive',1)->orderBy('name')->get(),
            'groups' => Group:: with('students')->get(),
            'testPhases' => TestPhase::all(),
            'studentTests' => $studentTests,
            'testsPhasesList' => $testsPhasesList,

        ]);
    }
}

