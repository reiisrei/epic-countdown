<?php

namespace App\Http\Controllers;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;

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
        $this->validate(request(), [

            'name' => ' required',
            'email' => 'required',

        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt( $request->password);
        $user->save();
    // Session::flash('success', 'You succesfully updated the category.');

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


    public function delete($id){

        $user = User::findOrFail($id);
        Auth::logout();

        if ($user->delete()) {
          return Redirect::route('index');
        }

    }
}
