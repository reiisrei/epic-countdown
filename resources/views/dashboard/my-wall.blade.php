@extends('layouts.auth-app')

@section('content')

<div class="container" style="padding-top:115px; padding-bottom:50px; height:100%">
<br>
<div class="card bg-dark text-white">
    <div class="card-body" style="text-align:center;"><h1>{{ strtoupper( Auth::user()->name) }}'S WALL OF EPIC COUNTDOWN</h1></div>
</div>
</div>
@endsection
