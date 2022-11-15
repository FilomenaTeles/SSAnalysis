<?php

namespace App\Http\Controllers;

use App\Course;
use App\Group;
use App\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.groups.index', ['groups' => Group::all()->sortBy('edition'), 'courses' => Course::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.groups.create', ['courses' => Course::all()]);
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
        $this -> Validate($request, [
            'course_id' => 'required',
            'edition' => 'required',
        ]);
        Group::create($request->all());
        return redirect('groups')->with('status','Turma criada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
        return view('pages.groups.show',[
            'group'=>$group,
            'courses' =>Course::with('groups')->get(),
            'students' => Student::with('group')->orderBy('name')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
        return view('pages.groups.edit',[
            'group'=>$group,
            'courses' =>Course::with('groups')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
        $group                = Group::find($group->id);
        $group -> edition            = $request -> edition;
        $group -> course_id        = $request -> course_id;

        $group->save();
        return redirect('groups')->with('status','Turma editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
