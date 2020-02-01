

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
			toastr.info("<?= lang("required_name");?>",  {timeOut: 5000});
		}
    if (phone=="") {
			toastr.info("<?= lang("required_phone");?>",  {timeOut: 5000});
        }
        if (email=="") {
			toastr.info("<?= lang("required_email");?>",  {timeOut: 5000});
        }

    if (message=="") {
			toastr.info("<?= lang("required_message");?>",  {timeOut: 5000});
        }
 if(name!=""&&phone!=""&&message!=""&&email!="") {
			$.ajax({
				url: '<?= base_url();?>contact/contact_action',
                type: 'POST',
                data: data,
                success: function( data ) {
               // alert(data);
                	if (data == "1") {
					toastr.success("<?= lang("sendmessage_result_send");?>",  {timeOut: 5000});
                	}
                  if (data == "0") {
					toast.info("<?= lang("sendmessage_result_send");?>",  {timeOut: 5000});
                	}
				}
         });
 }
	});
});
</script>
  <script src="<?= DIR ?>assets/toastr/toastr.min.js""></script>

<link href="<?= DIR ?>assets/toastr/toastr.min.css" rel="stylesheet">
