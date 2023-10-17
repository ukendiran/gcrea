  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="plugins/aos/aos.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="plugins/google-map/gmap.js"></script>
  
  <!-- Include medium-zoom CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.6/dist/medium-zoom.min.css">
<script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.0.6/dist/medium-zoom.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const zoomableImages = document.querySelectorAll('[data-zoomable]');
        mediumZoom(zoomableImages, {
            background: '#000',
            margin: 20
        });
    });
    
    document.addEventListener("DOMContentLoaded", function(){
      window.addEventListener('scroll', function() {
          if (window.scrollY > 50) {
            document.getElementById('navbar_top').classList.add('fixed-top');
            // add padding top to show content behind navbar
            navbar_height = document.querySelector('.navbar').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';
          } else {
            document.getElementById('navbar_top').classList.remove('fixed-top');
             // remove padding top from body
            document.body.style.paddingTop = '0';
          } 
      });
    });
    
    $(document).ready(function(){
        $('.nav-item').click(function(){
            $('.nav-item').removeClass("active");
            $(this).addClass("active");
        });
    });
    
</script>
<script type="text/javascript" src="https://control.msg91.com/app/assets/otp-provider/otp-provider.js"> </script>

 <script src="js/script.js"></script>
</body>

</html>