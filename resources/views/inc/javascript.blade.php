


    <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

      <!-- Plugin JavaScript -->
      <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

      <!-- Contact Form JavaScript -->
      <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
      <script src="{{ asset('js/contact_me.js') }}"></script>

      <!-- Custom scripts for this template -->
      <script src="{{ asset('js/freelancer.min.js') }}"></script>


      <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>

      <script type="text/javascript" src="{{ asset('js/countdown.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/moment-timezone-with-data.js') }}"></script>

      <script type="text/javascript">

      $('[data-countdown]').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');

      $this.countdown(finalDate, function(event) {
      $this.html(event.strftime('%D days %H:%M:%S'));
      });
      });
      </script>

    <script>
    function openPage(pageName,elmnt,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
