<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-klassy-cafe.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

@yield('content')

    <!-- jQuery -->
    <script src="{{  asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{  asset('assets/js/popper.js') }}"></script>
    <script src="{{  asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{  asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{  asset('assets/js/accordions.js') }}"></script>
    <script src="{{  asset('assets/js/datepicker.js') }}"></script>
    <script src="{{  asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{  asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{  asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{  asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{  asset('assets/js/slick.js')}}"></script>
    <script src="{{  asset('assets/js/lightbox.js') }}"></script>
    <script src="{{  asset('assets/js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{  asset('assets/js/custom.js') }}"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>
  </body>
</html>
