<?php

namespace App\Http\Controllers;

use App\Student;
use App\Test;
use App\TestPhase;
use App\TestType;
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $today = Carbon::now()->format('m-d');
         $birth ="m-d";

        //return view('home');
        $tests = Test::all()->where('test_date','>',date('Y-m-d'))->sortBy('test_date')->take(5);
        $students = Student::all()->where('birth_date')->sortBy('birth_date');

     //   $b_day = DB:: table('students') -> select('id','name','birth_date','email')->where(DB::raw(DATE_FORMAT($birth,'%m-%d'),$today)) ->get();

       // dd($b_day);

          return view('pages.index',[
              'tests'       => $tests,
              'students'    => $students,
              'testTypes'   => TestType::with('tests')->get(),
              'testPhases'  => TestPhase::with('tests')->get(),
              ]);
    }
}
