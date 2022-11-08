<?php

namespace App\Http\Controllers;

use App\StudentTest;
use Illuminate\Http\Request;

class StudentTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  return view('pages.studentTests.index');
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
     * @param  \App\StudentTest  $studentTest
     * @return \Illuminate\Http\Response
     */
    public function show(StudentTest $studentTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentTest  $studentTest
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentTest $studentTest)
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
    public function update(Request $request, StudentTest $studentTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentTest  $studentTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentTest $studentTest)
    {
        //
    }
}
