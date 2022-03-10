 @extends('layouts.frontend.layouts.master')
@section('content')


    <!-- ***** Header Area Start ***** -->
    @include('layouts.frontend.layouts.includes.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
   @include('layouts.frontend.layouts.includes.main')
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
   @include('layouts.frontend.layouts.includes.about')
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
  @include('layouts.frontend.layouts.includes.menu')
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    @include('layouts.frontend.layouts.includes.chefs')
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
  @include('layouts.frontend.layouts.includes.footer')

@endsection
