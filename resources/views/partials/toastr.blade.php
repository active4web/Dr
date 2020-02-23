
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
					toastr.success("Your message has been sent successfully",  {timeOut: 5000});
                	}
				}
         });
 }
	});
});
</script>
  