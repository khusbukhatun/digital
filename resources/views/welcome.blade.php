 @extends('frontend.layouts.master')
@section('content')


    <!-- ***** Header Area Start ***** -->
    @include('frontend.layouts.includes.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
   @include('frontend.layouts.includes.main')
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
   @include('frontend.layouts.includes.about')
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
  @include('frontend.layouts.includes.menu')
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    @include('frontend.layouts.includes.chefs')
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
  @include('frontend.layouts.includes.footer')

@endsection
