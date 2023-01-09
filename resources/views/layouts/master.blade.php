<!DOCTYPE html>
<html lang="en">
    <head>
       @include('layouts._head')
    </head>
    <body id="page-top">
        <!-- Navigation-->

        @include('layouts._navbar')

      <!-- content-->

      <div class="headersection">
            @yield('content')
      </div>


        <!-- about-->

        <div class="about">
            @yield('about')
        </div>

       <!-- service-->

       <div class="service">
            @yield('service')
      </div>

        <!-- Portfolio-->

        <div class="portfolio">
            @yield('portfolio')
       </div>



       <!-- Contact-->

        <div class="contact">
            @yield('contact')
       </div>

       <!-- Footer-->

       @include('layouts._footer')


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('frontend/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
