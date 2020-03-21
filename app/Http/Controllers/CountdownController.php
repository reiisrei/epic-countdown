<?php

namespace App\Http\Controllers;
use App\Countdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CountdownController extends Controller
{
    public function index(){

        //fetch all todos from database
        $countdown = Countdown::paginate(6);
        //display them in the todos.index page
        // dd($countdown);
        return view('index')->with('countdown', $countdown);
    }

    public  function store(Request $request){

        // $this->validate(request(), [

        //     'name' => ' required|min:6|max:10',
        //     'description' => 'required'
        // ]);

        $data = request()->all();

        if ($request->hasFile('picture')) {
            //Get filename with the extesion
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            //Get just the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('picture')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('picture')->storeAs('public/images',$fileNameToStore);
          }else {
            $fileNameToStore = 'noimage.jpg';
          }

        $countdown = new Countdown();

        $countdown->title = $data['title'];
        $countdown->subtitle = $data['subtitle'];
        $countdown->description = $data['description'];
        $countdown->date = $data['date'];
        $countdown->completion_text = $data['completion_text'];
        $countdown->unconfirmed_flag = $data['unconfirmed_flag'];
        $countdown->picture = $fileNameToStore;

        $countdown->save();

        Session::flash('success', 'Post created successfully');
        return redirect()->back();
    }
}
