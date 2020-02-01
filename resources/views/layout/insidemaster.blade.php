@include('partials.head')
<?php
 if(Request::segment(1)=="works"){
?>
<link href="{{url('/')}}/resources/them/css/lightbox.css" rel="stylesheet" type="text/css">
 <?php }?>
 @include('partials.minheader')
    @yield('content')
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    @include('partials.footer')
<?php
 if(Request::segment(1)=="works"){
?>

<script src="{{url('/')}}/resources/them/js/lightbox.js"></script>
<?php }?>
<?php
 if(Request::segment(1)=="contact"){
?>
 @include('partials.toastr')
<?php }?>

