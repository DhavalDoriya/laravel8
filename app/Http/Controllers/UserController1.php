<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class UserController extends Controller
{   

    //add user
    public function user(Request $request)
    {
        return view('users/adduser');
    }

    public function adduser(Request $request)
    {
        $data = $request->all();
        DB::table('users')->insert(
            ['name' => $data['name'], 'email' => $data['email'], 'password' => $data['password']]
        );

        return redirect('/users/all')->with('message', " Record Added");
    }

    //get all user
    public function getusers(Request $request)
    {
        $message = session('message');
        $users = db::table('users')->orderByDesc('id')->simplepaginate(10)->fragment('users');
        return view('users/users', ['users' => $users, 'message' => $message]);
    }

    //delete
    public function deleteuser(Request $request)
    {
        $id = $request->id;
        $deleted = DB::table('users')->where('id', '=', $id)->delete();
        if ($deleted) {
            return redirect('/users/all')->with('message', "$id record deleted successfully");
        }
        return redirect('/users/all');
    }

    //update user
    public function updateuser(Request $request)
    {
        $data = $request->all();
        $id = $request->id;
        $updated = DB::table('users')
            ->where('id', $id)
            ->update(['name' => $data['name'], 'email' => $data['email']]);
        if ($updated) {
            return redirect('/users/all')->with('message', "$id record updated successfully");
        }
        return redirect('/users/all');
    }


    public function getupdateuser(Request $request)
    {
        $data = DB::table('users')
            ->where('id',  $request->id)->first();
        return view('users/updateuser', ['user' => $data]);
    }
}
