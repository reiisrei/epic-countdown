@extends('layouts.applayout')

@section('content')

<section class="page-section portfolio" id="popular">
    <br><br><br>
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
      <div class="row">
        @foreach ($countdown as $count)
        <!-- Portfolio Item {{ $count->id }} -->
        <div class="col-md-6 col-lg-4">
             <!-- Countdown Timer -->
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#Modal{{ $count->id }}" style="width:339.984;height:245.531px;">
            <div class="thumbnail text-center" style="font-size:15px">
                <div class="caption">
                    <div class="timer" data-countdown="{{ $count->date }} {{$count->time}}"  style="background-color:rgb(26, 188, 156);opacity:0.8;"></div>
                </div>
                <div class="caption timer-title " style="background-color:rgb(26, 188, 156);opacity:0.8;">
                    <p>{{$count->title}}</p>
                </div>
            </div>
             <!-- -->
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
            </div>
            </div>
            <img class="img-fluid" src="/storage/images/{{ $count->picture }}" alt="">
          </div>
        </div>

         <!-- Portfolio Modal {{ $count->id }} -->
         <div class="portfolio-modal modal fade" id="Modal{{ $count->id }}" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    <i class="fas fa-times"></i>
                  </span>
                </button>
                <div class="modal-body text-center">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-lg-8">
                        <!-- Portfolio Modal - Title -->
                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $count->title }}</h2>
                        <!-- Icon Divider -->
                        <div class="divider-custom">
                          <div class="divider-custom-line"></div>
                          <div class="divider-custom-icon">
                            <i class="fas fa-star"></i>
                          </div>
                          <div class="divider-custom-line"></div>
                        </div>
                        <!-- Portfolio Modal - Image -->
                        <img class="img-fluid rounded mb-5" src="/storage/images/{{ $count->picture }}" alt="">
                        <!-- Portfolio Modal - Text -->
                        <hr style="border-top: 5px dashed rgb(26, 188, 156)">
                        <div data-countdown="{{ $count->date }} {{$count->time}}"  style="font-size:50px; font-weight: 900"></div>
                        <hr style="border-top: 5px dashed rgb(26, 188, 156)">
                        <p class="mb-5">{{ $count->description }}</p>
                        <button class="btn btn-primary" href="#" data-dismiss="modal">
                          <i class="fas fa-times fa-fw"></i>
                          Close Window
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        @endforeach

      </div>
      <!-- /.row -->

  </section>

 <!-- Footer -->
 @include('inc.footer')



 <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
 <div class="scroll-to-top d-lg-none position-fixed ">
   <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
     <i class="fa fa-chevron-up"></i>
   </a>
 </div>

@endsection
