@extends('layouts.applayout')

@section('title')
Epic Countdown
@endsection

@section('content')

@include('inc.header')

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="popular">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Popular Countdown</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-hourglass-end"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      @include('inc.home-page-countdown')

      <div class="text-center mt-4">
      <a class="btn btn-xl btn-outline-dark" href="{{ route('popular') }}">
          <i class="fas fa-chevron-circle-down mr-2"></i>
          See More
        </a>
      </div>
    </div>

  </section>

  <section class="page-section portfolio" id="ending">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Ending Soon Countdown</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-hourglass-end"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      @include('inc.home-page-countdown')
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-dark" href="{{ route('ending') }}">
          <i class="fas fa-chevron-circle-down mr-2"></i>
          See More
        </a>
      </div>
    </div>
  </section>

  <!-- About Section -->
 @include('inc.about')

@if (Auth::guest())
      <!-- login Section -->
@include('inc.login')
@else

@endif


  <!-- Footer -->
  @include('inc.footer')



  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>





@endsection


