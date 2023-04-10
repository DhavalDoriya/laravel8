<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserFormRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        // return $users;
        return view('user/showuser' , [ 'users'=> $users]);
        // return 'test';
        // return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/adduser');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         // return $request;
         //  $request->validated();
         $user = User::create([
             'name' => $request->input('name'),
             'first_name' => $request->input('first_name'),
             'middle_name' => $request->input('middle_name'),
             'last_name' => $request->input('last_name'),
             'email' => $request->input('email'),
             'password' => $request->input('password'),
             'phoneno' => $request->input('phoneno'),
             'address' => $request->input('address'),
             'created_at'=> now(),
             'updated_at'=> now()
         ]);
         return redirect('/user');

        //  $myimage = $request->image->getClientOriginalName();
        //  $path = $request->image->move(public_path('images'), $myimage);
 
         // $url = Storage::url($myimage);
         // $url = 'http://localhost:8000'.$path;
        //  return view('welcome', ['test' => $myimage]);
        //  return  $user;
        //  return view('');

     }


    // public function store(CreateUserFormRequest $request)
    // {
    //     //  $request->validated();
    //     // return view('user/adduser');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user/showone' , ['user' => $user  ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return User::all();
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
        return User::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      User::find($id)->delete();
      return redirect('user');

        // return User::where('id', '=', $id)->delete();
    }
}
