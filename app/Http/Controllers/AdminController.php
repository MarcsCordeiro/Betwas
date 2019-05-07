<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $users = DB::table('users')->get();

        return view('admin.index', ['users' => $users]);
    }

    public function login()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $validator = validator($request->all(), [
            'email' => 'required|min:3|max:100',
            'password' => 'required|min:3|max:100'
        ]);

        if ($validator->fails()) {
            return redirect('/admin/login')->withErrors($validator)->withInput();
        }
        
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        if (auth()->guard('admin')->attempt($credentials)) 
        {
            return redirect('/admin');
        } else {
            return redirect('/admin/login')->withErrors(['errors' => 'Login Inválido!'])->withInput();
        }
    }

    public function users()
    {
        $users = DB::table('users')->get();

        return view('admin.users', compact('users'));
    }

    public function logout()
    {
        auth()->guard('admin')->logout();

        return redirect('/admin/login');
    }

    public function deleteUser() 
    {
        $id = $_GET["id"];
        DB::table('users')->where('id', $id)->delete();
    }
}
