
				<div class="wrapper"  style="margin-top:30px;padding-bottom:3%">
<div class="container" style="direction:ltr">
    <div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
  <h3 class="hed_about" >عملاء تشرفنا بخدمتهم
      <p class="bordbott" style="margin-left:auto;margin-right:auto"></p></h3>
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
      <section class="autoplay slider main_arrow">
  @if(count($home_clients)>0)
	@foreach($home_clients as $start_clients)

          <div>
            <a href="{{$start_clients->link}}" title="{{$start_clients->title_ar}}" target="_blank">
            <img src="{{url('/')}}/uploads/clients/{{$start_clients->img}}" alt="{{$start_clients->title_ar}}">
          </a>
          </div>

          @endforeach
  @endif

          </section>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
<a class="more" href="{{url('/')}}/clients" style="background-color: #226085;border:0px;    padding: 6px 34px;">
  <span class="more_clients" ><i class="fas fa-arrow-left"></i></span><span>المزيد</span></a>
</div>
</div>
</div>
<div class="clearfix"></div>
