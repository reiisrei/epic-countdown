<!-- Masthead -->
<header class="masthead bg-primary text-white text-center" id="page-top">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="{{ asset('img/hourglass.png') }}" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Epic Countdown</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-clock"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->

      @guest
      <p class="masthead-subheading font-weight-light mb-0">Click here to make your own countdown!</p>
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="#signup">
          <i class="fas fa-sign-in-alt mr-2"></i>
          Sign Up!
        </a>
      </div>
      @endguest
    </div>

      <!-- Portfolio Modal 1 -->

  </header>
