<?php

namespace App\Http\Controllers;

use App\User;
use App\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\isEmpty;

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
        $user->user_type_id = $request->user_type_id;
        $user->password     = bcrypt($request->password);
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->save();

        if ($request->file('photo')) {
            // Get Image File
            $imagePath = $request->file('photo');
            // Define Image Name
            $imageName = $user->id . '_' . time() . '_' . $imagePath->getClientOriginalName();
            // Save Image on Storage
            $path = $request->file('photo')->storeAs('images/users/' . $user->id, $imageName, 'public');
            //Save Image Path
            $user->photo = $path;
        }

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
     *
     */
    public function update(Request $request, $id)
    {
        $user              = User::find($id);
        if (!isEmpty($request->password)){
            $user->password     = bcrypt($request->password);
        }

        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->isActive     = $request->isActive;
        $user->save();

        if ($request->file('photo')) {
            // Get Image File
            $imagePath = $request->file('photo');
            // Define Image Name
            $imageName = $user->id . '_' . time() . '_' . $imagePath->getClientOriginalName();
            //Delete previouse photo
            Storage::deleteDirectory('public/images/users/' . $user->id);;
            // Save Image on Storage
            $path = $request->file('photo')->storeAs('images/users/' . $user->id, $imageName, 'public');

            //Save Image Path
            $user->photo = $path;
        }

        $user->save();
        return redirect('users')->with('status','User editado com sucesso!');
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
