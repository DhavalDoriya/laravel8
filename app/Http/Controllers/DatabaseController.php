<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseController extends Controller
{
    public function show($page = 1)
    {

        $products = db::table('products')->paginate(10)->fragment('products');
        return view('others/products', ['products' => $products]);


        // $test = (DB::table('products')->count() / 10);
        // // echo $test;
        // if ($test > $page) {
        //     $products = DB::table('products')->offset($page * 10 - 10)->limit(10)->get();
        //     // return $products;
        //     return view('products', ['products' => $products, 'page' => $page]);
        // } else {
        //     $page = 1;
        //     $products = DB::table('products')->offset($page * 10 - 10)->limit(10)->get();
        //     return view('products', ['products' => $products, 'page' => $page]);
        // }
    }

    public function sortby(string $sortby, $page = 1)
    {
        $products = DB::table('products')
            ->orderBy("$sortby")
            ->get();
        return view('products', ['products' => $products, 'page' => $page]);
    }


    public function search(Request $request, $page = 1)
    {
        $name = $request->get('name');
        $value = $request->get('value');
        $products = DB::table('products')
            ->where("$name", 'like', "%$value%")->limit(10)
            ->get();

        return view('products', ['products' => $products,  'page' => $page]);
    }


    public function dbtest(Request $request)
    {

        $query = $request->get('query');
        if ($query) {
            // eval('$query = ' . $query.";");
            return view('dbtest', ['data' => $query]);
        } else {
            return view('dbtest');
        }
    }




    //users copd


    public function users(Request $request)
    {
        $users = db::table('users')->orderByDesc('id')->paginate(5)->fragment('users');
        return view('dbtest', ['users' => $users, 'message' => '']);
    }




    public function saveuser(Request $request)
    {
        $data = $request->all();
        DB::table('users')->insert(
            ['name' => $data['name'], 'email' => $data['email'], 'password' => $data['password']]
        );
        return redirect('/saveuser');
    }

    public function getfrom(Request $request)
    {
        $users = db::table('users')->orderByDesc('id')->paginate(5)->fragment('users');
        return view('dbtest', ['users' => $users, 'message' => '']);
    }

    public function deleteuser(Request $request)
    {
        $id = $request->id;
        $deleted = DB::table('users')->where('id', '=', $id)->delete();
        $users = db::table('users')->orderByDesc('id')->paginate(5)->fragment('users');

        return view('dbtest', ['users' => $users, 'message' => "$id record deleted successfully"]);
    }


    public function updateuser(Request $request)
    {
        $data = $request->all();
        $id = $request->id;
        $updated = DB::table('users')
            ->where('id', $id)
            ->update(['name' => $data['name'], 'email' => $data['email']]);

        $users = db::table('users')->orderByDesc('id')->paginate(5)->fragment('users');
        if ($updated) {
            return view('dbtest', ['users' => $users, 'message' => "$id record updated successfully"]);
        } else {
            return view('dbtest', ['users' => $users, 'message' => "error in updated a record no $id "]);
        }
    }



    public function getupdateuser(Request $request)
    {
        $data = DB::table('users')
            ->where('id',  $request->id)->first();
        return view('updateuser', ['user' => $data]);
    }


    // search


}
