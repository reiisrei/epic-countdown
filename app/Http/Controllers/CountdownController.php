<?php

namespace App\Http\Controllers;
use App\Countdown;
use Illuminate\Http\Request;

class CountdownController extends Controller
{
    public function index(){

        //fetch all todos from database
        $countdown = Countdown::paginate(6);
        //display them in the todos.index page
        return view('index')->with('countdown', $countdown);
    }

    public  function store(){

        // $this->validate(request(), [

        //     'name' => ' required|min:6|max:10',
        //     'description' => 'required'
        // ]);

        $data = request()->all();

        $countdown = new Countdown();

        $countdown->title = $data['title'];
        $countdown->subtitle = $data['subtitle'];
        $countdown->description = $data['description'];
        $countdown->date = $data['date'];
        $countdown->completion_text = $data['completion_text'];
        $countdown->unconfirmed_flag = $data['unconfirmed_flag'];
        $countdown->picture = $data['picture'];

        $countdown->save();

        session()->flash('success', 'Countdown created successfully');
        return redirect('/dashboard');
    }
}
