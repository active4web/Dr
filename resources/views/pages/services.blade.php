@extends('layout.insidemaster')
@section('content')

				<div class="container main_breadcrumb">
					<div class="row">
						<div class="col-md-6 col-xs-5 col-sm-5 text-right">
							<div class="title">
								<h3>{{trans('messages.services')}}</h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-7 col-sm-7" >
							<ol class="breadcrumb text-left">
							  <li class=""><a href="{{url('/')}}" class="home">{{trans('messages.home_page')}}</a></li>
							  <li class="active"><a href="#">{{trans('messages.services')}}</a></li>
							</ol>	
						</div>
					</div>
				</div>		
				<div class="clearfix"></div>
					</div>
		</div>						
       
        <div class="wrapper"  style="margin-top:30px;padding-bottom:3%">
   <div class="container">
<?php if(count($data)>0){
foreach($data as $prod) {
?>
      <div class="col-md-4  col-xs-12 col-sm-6 mb-n1 mainbox">
          <div class="row main-box">
               <div class="box4">
                  <div class="overlaybox"></div>
                      <img src="{{url('/')}}/backend/uploads/services/{{$prod->img}}" class="rounded float-left img_business" alt="      @if(app()->getLocale() == 'ar'){!!$prod->title_ar!!}
               @else{!!$prod->title_eng!!}@endif">
                         <div class="box-content">
                            <ul class="icon">
                               <li><a href="{{url('/')}}/details/{{$prod->id}}" class="fas fa-external-link-alt"></a></li>
                            </ul>
                    </div>

                    </div>

            <div class="panel panel-default">
              <div class="panel-heading">      @if(app()->getLocale() == 'ar'){!!$prod->title_ar!!}
               @else{!!$prod->title_eng!!}@endif</div>
                    <p class="desc-services">
                    @if(app()->getLocale() == 'ar'){!!$prod->description_ar!!}
               @else{!!$prod->description_en!!}@endif                
                    </p>
                </div>
             </div>
            </div>

            <?php }?>
            <div class="clearfix col-md-12"></div>
<div class="col-md-12 mb-n1 text-center">{{ $data->onEachSide(2)->links()}}</div>

<?php }else {?>
	<div class="col-md-12 mb-n1 ">لا يوجد محتوى حاليا</div>
<?php }?>

    </div>
            <div class="clearfix"></div>
        </div>


    <div class="clearfix"></div>

@endsection



