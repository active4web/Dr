
   @include('partials.head')
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    <?php
 if(Request::segment(1)=="contact"){
?>
 @include('partials.toastr')
<?php }?>
@include('partials.toastreserv')