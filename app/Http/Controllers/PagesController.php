<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
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
    public function Userdashboard()
    {
        return view('user-dashboard');
    }

    public function MyAccount()
    {
        return view('dashboard.my-account');
    }
    public function MyWall()
    {
        return view('dashboard.my-wall');
    }
    public function MyCountdown()
    {
        return view('dashboard.my-countdown');
    }
    public function CreateCountdown()
    {
        return view('dashboard.create-countdown');
    }
}
