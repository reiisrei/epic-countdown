@extends('layouts.auth-app')

@section('content')
<div class="container" style="padding-top:115px; padding-bottom:50px; ">
<br>
<div class="card bg-dark text-white">
    <div class="card-body" style="text-align:center;"><h1>CREATE COUNTDOWN</h1></div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Create new countdown</div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-item">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/store-epic" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title" name="title">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Sub Title (Optional)" name="subtitle">
                    </div>
                    <div class="form-group">
                        <textarea name="description" placeholder="Description" id="" cols="5" rows="5"
                            class="form-control"></textarea>
                    </div>
                    {{-- date picker --}}
                    <span style="text-align:center;"><h5>Date / Time</h5></span>
                        <div style="overflow:hidden;">
                            <div class="form-group">
                               <input type="hidden" id="datetimepicker13" name="date">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Completion Text" name="completion_text">
                        </div>
                        <div class="form-group">
                            <span><h6>Unconfirmed flag</h6></span>
                            <label class="switch">
                                <input type="checkbox" value="1" name="unconfirmed_flag">
                                <span class="slider"></span>
                              </label>
                        </div>

                        <div class="form-group">
                            <label> Upload picture</label>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01" name="picture">
                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Create Countdown</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
