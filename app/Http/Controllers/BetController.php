<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BetController extends Controller
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
     * Mostra o perfil do usuario.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('bet');
    }
}
