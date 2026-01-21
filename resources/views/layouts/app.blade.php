@extends('layouts.clean')


{{-- @section('title','home') --}}

@section('childContent')

    @include('partials.header')

    <!-- Home Slider -->

    <!--/ Home Slider -->

    @yield('content')
      
    
   @hasSection('footer')
       <footer>
        @section('footer')
            <a href="#">link 1</a>
            <a href="#">link 2</a>
        @show
    </footer>
   @endif
    
    
@endsection