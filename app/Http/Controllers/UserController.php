<?php

namespace App\Http\Controllers;

use App\User;
use App\UserType;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('pages.users.index',['users' => User::with('userType')->get(),'userTypes'=>UserType::with('users')->get()]);
    }

    /**
     * Show the form for creating a new resource.

     */
    public function create()
    {
        return view('pages.users.create',['userTypes'=>UserType::with('users')->get()]);
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
            'email'         => 'required',
            'user_type_id'  =>'required',
            'image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $user               = new User();
        $user->user_type_id = $request->userType;
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->save();



       return redirect('users')->with('status','Utilizador criado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show(User $user)
    {
        return view('pages.users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(User $user)
    {
        return view('pages.users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
