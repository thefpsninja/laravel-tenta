<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        $currentUserName = Auth::user()->name;
        $currentUserAge = Auth::user()->age;
        return view('home', [
            'currentUserName' => $currentUserName,
            'currentUserAge' => $currentUserAge,
        ]);
    }

}
