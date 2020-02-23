

<script>
$(document).ready(function(e) {
$(".radio_name").click(function(e) {
var b=$("input[name='drname']:checked").val();
$("#drname_id").val(b);
$(".step_info1").text(b);
});
$(".radio_service").click(function(e) {
var radio_service=$("input[name='radio_service']:checked").val();
$("#reason_id").val(radio_service);
$(".step_info2").text(radio_service);
});
$(".radio_time").click(function(e) {
var radio_time=$("input[name='radio_time']:checked").val();
$("#radio_tim").val(radio_time);
});

$("#yourname").keyup(function(){
  $("#yourname1").val($("#yourname").val());
  });
  $("#yourphone").keyup(function(){
  $("#yourphone1").val($("#yourphone").val());
  });
var radio_time = $("#temp_date_start").val();
var temp_date_start = $("#temp_date_start").val();
$(".step_info2").text(radio_time+""+temp_date_start);

$(".reservation").click(function(e) {
var yourname = $("#yourname").val();
var yourphone = $("#yourphone").val();
if (yourname=="") {toastr.info("Full name required",  {timeOut: 5000});}
if (yourphone=="") {toastr.info("Your Phone required",  {timeOut: 5000});}
        
    var form=$("#fofm");
    var data=form.serialize();
//alert(data);
if(yourphone!=""&&yourname!="") {
			$.ajax({
				url:"{{url('reservation_action')}}",
                type: 'POST',
                data: data,
                success: function( data ) {
                alert(data);
                	if (data==1) {
					toastr.success("Your message has been sent successfully",{timeOut: 5000});

                	}
				}
         });
 }
	});
  


});
</script>


  
  <script src="{{url('/')}}/resources/them/toastr/toastr.min.js"></script>
<link href="{{url('/')}}/resources/them/toastr/toastr.min.css" rel="stylesheet">
