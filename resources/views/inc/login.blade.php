<section class="page-section" id="signup">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('Login') }}</h2>

                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-sign-in-alt"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>


                <!-- Contact Section Form -->
                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <form method="POST" action="{{ route('login') }}" name="sentMessage" id="contactForm" novalidate="novalidate">
                      @csrf


                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                          <label>Email Address</label>

                          <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                          <p class="help-block text-danger"></p>
                        </div>
                      </div>

                      <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                          <label>Password</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>

                      <div class="container">
                          <div class="row">
                              <div class="col-md">
                                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                     <label class="form-check-label" for="remember">
                                         {{ __('Remember Me') }}
                                     </label>
                               </div>


                          </div>
                          <br>
                          <div class="row">
                            <div class="col-sm">
                              <button type="submit" class="btn btn-primary " style="display: block; width: 100%; border: none; padding: 14px 28px;font-size: 16px;">
                                  {{ __('Login') }}
                              </button>
                            </div>


                          </div>
                          <div class="row">
                              <div class="col-sm">
                                      @if (Route::has('password.request'))
                                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                                  {{ __('Forgot Your Password?') }}
                                              </a>
                                          @endif
                              </div>
                          </div>
                        </div>
<br>



                    </form>
                  </div>
                </div>
            </div>

            {{-- Register --}}
            <div class="col-sm">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('Register') }}</h2>

                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-user-plus"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>


                <!-- Contact Section Form -->
                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <form method="POST" action="{{ route('register') }}" name="sentMessage" id="contactForm" novalidate="novalidate">
                      @csrf

                      <div class="row">
                        <div class="col">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                  <label style="color:black">{{ __('Name') }}</label>

                                  <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror

                                  <p class="help-block text-danger"></p>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                  <label>{{ __('E-Mail Address') }}</label>
                                  <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  <p class="help-block text-danger"></p>
                                </div>
                              </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                  <label>{{ __('Password') }}</label>
                                  <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                  <p class="help-block text-danger"></p>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                  <label>{{ __('Confirm Password') }}</label>
                                  <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                  <p class="help-block text-danger"></p>
                                </div>
                              </div>
                        </div>
                      </div>
                      <br><br>
                      <div class="row">
                        <div class="col-sm">
                          <button type="submit" class="btn btn-primary " style="display: block; width: 100%; border: none; padding: 14px 28px;font-size: 16px;">
                            {{ __('Register') }}
                          </button>
                        </div>


                      </div>


                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </section>
