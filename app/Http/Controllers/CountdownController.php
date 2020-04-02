<?php

namespace App\Http\Controllers;
use App\Countdown;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CountdownController extends Controller
{
    public function index(){

        $countdown = Countdown::paginate(6);

        return view('index')->with('countdown', $countdown);
       // return print_r(get_class_vars('CountdownController'));
    }

    public function create(){

        return view('dashboard.create-countdown');
    }

    public  function store(Request $request){

        $this->validate(request(), [

            'title' => ' required',
            'description' => 'required',
        ]);

        $data = request()->all();
        $category = Category::where('name','=',$data['category'])->first();

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
        if(isset($request->unconfirmed_flag)){
            $countdown->unconfirmed_flag = $data['unconfirmed_flag'];
        }else{
            $countdown->unconfirmed_flag = 0;
        }
        $countdown->categoryID = $category->order;
        $countdown->picture = $fileNameToStore;
        $countdown->user_id = Auth::user()->id;
        $countdown->save();

        Session::flash('success', 'Post created successfully');
        return redirect()->back();
    }
}
