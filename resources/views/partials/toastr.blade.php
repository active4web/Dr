

<script>
$(document).ready(function(e) {
//toastr.info("ddd",  {timeOut:1200000});

$(".radio_name").click(function(e) {
var b=$("input[name='drname']:checked").val();
$("#drname_id").val(b);
});
$(".radio_service").click(function(e) {
var radio_service=$("input[name='radio_service']:checked").val();
$("#reason_id").val(radio_service);
});

$(".reservation").click(function(e) {
//var name = $("#name").val();
//var phone = $("#phone").val();
//var message = $("#message").val();
//var email = $("#email").val();
var form = $("#fofm");
//var form=$("#myForm");
    var data=form.serialize();
alert(data);
    if (name=="") {
			toastr.info("Full name required",  {timeOut: 5000});
		}
    if (phone=="") {
			toastr.info("Your Phone required",  {timeOut: 5000});
        }
        if (email=="") {
			toastr.info("Your email required",  {timeOut: 5000});
        }

    if (message=="") {
			toastr.info("Your message required",  {timeOut: 5000});
        }
 if(name!=""&&phone!=""&&message!=""&&email!="") {
			$.ajax({
				url:"{{ url('contact_action') }}",
                type: 'POST',
                data: data,
                success: function( data ) {
              // alert(data);
                	if (data == "1") {
					toastr.success("Your message send success and will replay in ",  {timeOut: 5000});
                	}
                  if (data == "0") {
					toast.info("{{trans('messages.sendmessage_result_send')}}",  {timeOut: 5000});
                	}
				}
         });
 }
	});
});
</script>


  <script>
$(document).ready(function(e) {
//toastr.info("ddd",  {timeOut:1200000});
$(".send_txt").click(function(e) {
var name = $("#name").val();
var phone = $("#phone").val();
var message = $("#message").val();
var email = $("#email").val();
var form = $("#myform");
//var form=$("#myForm");
    var data=form.serialize();
//alert(data);
    if (name=="") {
			toastr.info("Full name required",  {timeOut: 5000});
		}
    if (phone=="") {
			toastr.info("Your Phone required",  {timeOut: 5000});
        }
        if (email=="") {
			toastr.info("Your email required",  {timeOut: 5000});
        }

    if (message=="") {
			toastr.info("Your message required",  {timeOut: 5000});
        }
 if(name!=""&&phone!=""&&message!=""&&email!="") {
			$.ajax({
				url:"{{ url('contact_action') }}",
                type: 'POST',
                data: data,
                success: function( data ) {
              // alert(data);
                	if (data == "1") {
					toastr.success("Your message send success and will replay in ",  {timeOut: 5000});
                	}
                  if (data == "0") {
					toast.info("{{trans('messages.sendmessage_result_send')}}",  {timeOut: 5000});
                	}
				}
         });
 }
	});
});
</script>
  <script src="{{url('/')}}/resources/them/toastr/toastr.min.js""></script>

<link href="{{url('/')}}/resources/them/toastr/toastr.min.css" rel="stylesheet">
