

<?php
foreach($site_info as $sitesetting)
?>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="{{$sitesetting->keywords}}">
		<meta name="description" content="{{$sitesetting->description}}">
		<title>
        @if(app()->getLocale() == 'ar') {{$sitesetting->name_site_ar}} @else {{$sitesetting->name_site }} @endif
		</title>
  

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="{{url('/')}}/resources/them/css/fontawesome5.11.2/css/all.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  @if(app()->getLocale() == 'ar')
  <link href="{{url('/')}}/resources/them/css/bootstrap.css" rel="stylesheet" type="text/css">
  @else
    <link href="{{url('/')}}/resources/them/css/bootstrap-en.css" rel="stylesheet" type="text/css">
@endif

  <link href="{{url('/')}}/resources/them/css/style.css" rel="stylesheet" type="text/css">
  @if(app()->getLocale() == 'en')
    <link href="{{url('/')}}/resources/them/css/style-en.css" rel="stylesheet" type="text/css">
@endif
  <link href="{{url('/')}}/resources/them/css/customs.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/resources/them/css/main.css" rel="stylesheet" type="text/css">
  <link href="{{url('/')}}/resources/them/css/effects.min.css" rel="stylesheet" type="text/css">
  <style>
		@import url(https://fonts.googleapis.com/earlyaccess/notosanskufiarabic.css);
		</style>
	<link rel="shortcut icon" href="{{url('/')}}/backend/uploads/site_setting/{{$sitesetting->favicon}}" type="image/x-icon" />

