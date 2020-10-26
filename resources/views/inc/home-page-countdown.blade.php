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
        <img class="img-fluid" src="/storage/images/{{ $count->picture }}" alt="" style="width: 100%;height: 100%;object-fit: cover;">
      </div>
      <favorite
      :countdown={{ $count->id }}
      :favorited={{ $count->favorited() ? 'true' : 'false' }}
  ></favorite>
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
                    @if (Auth::check())
                    <favorite
                        :countdown={{ $count->id }}
                        :favorited={{ $count->favorited() ? 'true' : 'false' }}
                    ></favorite>
                  @endif
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



