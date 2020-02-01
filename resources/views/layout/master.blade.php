
   @include('partials.head')
   @include('partials.home-head')

<?php
 if(Request::segment(1)==""){
?>
 @include('partials.header')
<?php } else {?>
    @include('partials.header')
 <?php }?>
    @yield('content')
    @include('partials.footer')
    @include('partials.home-footer')
    