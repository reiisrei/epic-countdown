@extends('layouts.auth-app',['id' => $user->id])

@section('content')
<div class="container" style="padding-top:115px; padding-bottom:50px; height:100%">
<br>
<div class="card bg-dark text-white">
    <div class="card-body" style="text-align:center;"><h1>{{ strtoupper( Auth::user()->name) }}'S ACCOUNT SETTINGS</h1></div>
</div>
<br>
<form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">Account Details</div>
            <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" value="">
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Update Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</form>
<br>

<form action="{{ route('user.delete', ['id' => $user->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
<div class="card bg-danger text-white">
    <div class="card-header">DELETE ACCOUNT</div>
    <div class="card-body" style="text-align:center">
        WARNING: DELETING THE ACCOUNT IS PERMANENT.
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-dark">DELETE ACCOUNT</button>
    </div>
  </div>
</form>
</div>



@endsection
