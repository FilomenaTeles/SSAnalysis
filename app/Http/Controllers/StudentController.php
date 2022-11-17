<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Group;
use App\Imports\StudentsImport;
use App\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**

     */
    public function index()
    {
        return view('pages.students.index',[
            'students' => Student::with('group')->orderBy('name')->paginate(10),
            'groups'   => Group:: with('students')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('pages.students.create',[
            'groups' =>Group::with('students')->get(),
        ]);
    }
    public function createWGroup(Group $groupId)
    {
        return view('pages.students.create',[
            'groupId' =>$groupId,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'city'          => 'required',
            'birth_date'    => 'required',
            'email'         => 'required|unique:students',
            'phone_number'  => 'required|digits:9',
            'group_id'      => 'required',

        ]);

        $student                    = new Student();
        $student -> name            = $request -> name;
        $student -> city            = $request -> city;
        $student -> birth_date      = $request -> birth_date;
        $student -> email           = $request -> email;
        $student -> phone_number    = $request -> phone_number;
        $student -> group_id        = $request -> group_id;

        $student->save();



        if ($request->groupRedirect){
        return redirect('groups/'.$request->group_id)->with('status','Aluno criado com sucesso!');
    }else{
        return redirect('students')->with('status','Aluno criado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Student $student)
    {
        return view('pages.students.show',[
            'student'=>$student,
            'groups' =>Group::with('students')->get()
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit(Student $student)
    {
        return view('pages.students.edit',[
            'student'=>$student,
            'groups' =>Group::with('students')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, Student $student)
    {
        $student                = Student::find($student->id);
        $student -> name            = $request -> name;
        $student -> city            = $request -> city;
        $student -> birth_date      = $request -> birth_date;
        $student -> email           = $request -> email;
        $student -> phone_number    = $request -> phone_number;
        $student -> group_id        = $request -> group_id;
        $student -> isActive        = $request -> isActive;

        $student->save();


        return redirect('groups/'.$request->group_id)->with('status','Aluno editado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function export()
    {
        return Excel::download(new StudentsExport, 'students.xlsx');
    }

    public function importForm()
    {

        return view('pages.students.import');
    }

    public function import()

    {

        Excel::import(new StudentsImport, request()->file('import-form'));

        return redirect('groups')->with('success', 'Alunos importados com sucesso!');
    }
}
