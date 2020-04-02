<?php

namespace App\Http\Controllers;
use App\Category;
use App\User;
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function MyAccount($id)
    {

        $user = User::find($id);
        return view('dashboard.my-account')->with('user',$user);
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
        $user = User::find($id);

        $user->name = $user->name;
        $user->email = $user->email;
        $user->save();
     Session::flash('success', 'You succesfully updated the category.');
        return redirect()->back();
    }


    public function MyWall($id)
    {
        $user = User::find($id);
        return view('dashboard.my-wall')->with('user',$user);
    }
    public function MyCountdown($id)
    {
        $user = User::find($id);
        return view('dashboard.my-countdown')->with('user',$user);
    }
    public function CreateCountdown($id)
    {
        $user = User::find($id);
        return view('dashboard.create-countdown')->with('category', Category::all())->with('user',$user);
    }
}
