<?php

namespace App;
use App\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Countdown extends Model
{
    public function favorited(){

    return (bool) Favorite::where('user_id', Auth::id())
                        ->where('countdown_id', $this->id)
                        ->first();
}
}
