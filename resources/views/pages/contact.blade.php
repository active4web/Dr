@extends('layout.insidemaster')
@section('content')

<div class="container main_breadcrumb">
					<div class="row">
						<div class="col-md-6 col-xs-5 col-sm-5 text-right">
							<div class="title">
								<h3>{{trans('messages.contact_page')}}</h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-7 col-sm-7" >
							<ol class="breadcrumb text-left">
							  <li class=""><a href="{{url('/')}}" class="home">{{trans('messages.home_page')}}</a></li>
							  <li class="active"><a href="#">{{trans('messages.contact_page')}}</a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
					</div>
		</div>


<div class="wrapper"  style="margin-top:30px;padding-bottom:3%">
<div class="container">
   <div class="row">
<div class="col-md-5 col-sm-5 col-xs-12 ">
   <div class="col-md-12">
	    <h3 class="servivce_title" > {{trans("messages.Connect_now")}} <p class=""></p></h3>
        <p><?= trans("messages.we_communicate");?></p>
	</div>
<form class="col-md-12" action="#" id="myform" >
					<input type="hidden" name="mass_type" value="2">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-12">
            <input class="form-control input-lg" id="name" type="text" name="title" placeholder="<?= trans("messages.name_contact");?>">
        </div>
        <div class="col-md-12">
            <input class="form-control input-lg" id="phone" type="text" name="phone" placeholder="<?= trans("messages.phone_contact");?>">
        </div>
        <div class="col-md-12">
            <input class="form-control input-lg" id="email" type="text" name="email" placeholder="<?= trans("messages.mail_contact");?>">
        </div>
        <div class="col-md-12">
                <textarea class="form-control input-lg" id="message" name="msg" placeholder="<?= trans("messages.message_contact");?>"></textarea>
        </div>
        <div class="col-md-12">
        <button class="contact-btn send_txt" type="button"><?= trans("messages.established_Send");?></button>
        </div>

</form>
</div>
<div class="col-md-1 col-sm-1 col-xs-12 "></div>
@foreach($site_info as $siteinfo)
	<div class="col-md-6 col-sm-6 col-xs-12">
<div class="contact mt-50">
<?= $siteinfo->map?>
<div class="info">
    <li><div>{{trans("messages.contact_address")}}:</div><p>
    @if(app()->getLocale() == 'ar'){!!$siteinfo->address_ar!!}
    @else{!!$siteinfo->address_eng!!}
    @endif
                        </p> </li>
	<li><div>{{trans("messages.phone_contact")}}:</div><p><?= $siteinfo->phone?></p></li>
	<li><div>{{trans("messages.mail_contact")}}:</div><p><?= $siteinfo->email?></p></li>
</div>
</div>
    </div>
    @endforeach
    </div>
 </div>

						<div class="clearfix"></div>
					</div></div>


@endsection

