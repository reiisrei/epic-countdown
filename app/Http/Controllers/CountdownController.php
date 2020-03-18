<?php

namespace App\Http\Controllers;
use App\Countdown;
use Illuminate\Http\Request;

class CountdownController extends Controller
{
    public function index(){

        //fetch all todos from database
        $countdown = Countdown::all();
        //display them in the todos.index page
        return view('index')->with('countdown', $countdown);
    }
    // public  function store(){

    //     $this->validate(request(), [

    //         'name' => ' required|min:6|max:10',
    //         'description' => 'required'
    //     ]);

    //     $data = request()->all();

    //     $todo = new Todo();

    //     $todo->name = $data['name'];
    //     $todo->description = $data['description'];
    //     $todo->completed = false;

    //     $todo->save();

    //     session()->flash('success', 'Todo created successfully');
    //     return redirect('/dashboard');
    // }
}
