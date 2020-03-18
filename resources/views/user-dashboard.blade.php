@extends('layouts.auth-app')

@section('content')

<div id="my-account" class="tabcontent">
    <div class="content">
        @include('dashboard.my-account')
    </div>

</div>

<div id="my-wall" class="tabcontent">
  @include('dashboard.my-wall')
</div>

<div id="my-countdown" class="tabcontent">
  @include('dashboard.my-countdown')
</div>

<div id="create-countdown" class="tabcontent">
  @include('dashboard.create-countdown')
</div>


@endsection
